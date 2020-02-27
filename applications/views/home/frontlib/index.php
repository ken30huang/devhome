<div class="home_search clearfix mgn-btm-80">
    <div class="home_tabs">
        <a href="javascript:;" class="cur">搜库</a>
        <a href="javascript:;">搜图</a>
    </div>
    <div class="input_wrap">
        <input id="search_name" class="lib_name_input" maxlength="50" />
        <button type="button" class="btn_search">搜索</button>
    </div>
    <div class="home_search_panels">
        <div class="photo_tit">* 库的主要来源：<a href="https://www.bootcdn.cn/" target="_blank">BootCDN</a>
        | <a href="https://www.uisdc.com/tag/%e9%85%b7%e7%ab%99" target="_blank">酷站-优设网</a> |
        <a href="https://javascriptweekly.com/" target="_blank">Javascript Week</a> |
        <a href="https://webtoolsweekly.com" target="_blank">Webtools Weekly</a> |
        <a href="https://css-weekly.com" target="_blank">css-weekly.com</a>
        <p>目前以前端库为主，逐渐扩展到php，python，c/c++，java等编程语言</p>
        </div>
        <div class="category_box lib_sel">类型加载中...</div>
    </div>
    <div class="home_search_panels" style="display:none">
        <div class="home_search_photo">
            图片：<br />
            <label for="piqsels_site"><input type="radio" checked="checked" id="piqsels_site" name="search_site" value="https://www.piqsels.com/zh/search?q=" /> Piqsels（中文）</label>
            <label for="pxfuel_site"><input type="radio" id="pxfuel_site" name="search_site" value="https://www.pxfuel.com/en/search?q=" /> Pxfuel（英文）</label>
        </div>
        <div class="home_search_photo">
            图标：<br />
            <label for="uxwing_site"><input type="radio" id="uxwing_site" name="search_site" value="https://uxwing.com/?s=" /> UXWING（英文）</label>
        </div>
    </div>
    <div class="home_search_result">
    </div>
</div>
<script>
(function($) {

    var tabs = $('.home_tabs a');
    var panels = $('.home_search_panels');
    var _inputEl = $('#search_name');
    var category_box = $('.lib_sel');
    var result_box = $('.home_search_result');
    var show_index = 0;
    var lib_cateids = {};
    
    tabs.off().on('click' , function() {
        show_index = tabs.index($(this));
        tabs.removeClass('cur').eq(show_index).addClass('cur');
        panels.hide().eq(show_index).show();
        result_box.hide().eq(show_index).show();
        _inputEl.val('');
    });
    category_box.off().on('click' , 'a' , function() {
        var _this = $(this);
        if(!lib_cateids[_this.data('cateid')]) {
            lib_cateids[_this.data('cateid')] = true;
            _this.addClass('sel');
        } else {
            lib_cateids[_this.data('cateid')] && (delete lib_cateids[_this.data('cateid')]);
            _this.removeClass('sel');
        }
        lib_search();
    });
    $('.btn_search').click(function() {
        if(!_inputEl.val()) {
            alert('请输入搜索关键字');
            return;
        }
        if(show_index == 0) {
            lib_search();
        } else {
            photo_search();
        }
    });

    function lib_cate_query() {
        ajaxReq({
            url:'/api/lib/frontcates',
            succFun:function(res) {
                if(res.code == '000') {
                    // console.log(res);
                    var rows = res.rows||[];
                    var lib_cates = [];
                    for(var i=0; i<rows.length; i++) {
                        lib_cates.push('<a href="javascript:;" class="" data-cateid="'+rows[i].cate_id+'">'+rows[i].cate_name+'</a>');
                    }
                    $('.category_box').html(lib_cates.join(''));
                }
            }
        });
    }
    lib_cate_query();

    lib_search();
    function lib_search() {
        var postcateids = [];
        var postData = {};
        for(var cateid in lib_cateids) {
            postcateids.push(cateid);
        }
        if(postcateids.length > 0) {
            postData.cate_id = postcateids.join();
        }
        if(_inputEl.val()) {
            postData.lib_name = _inputEl.val();
        }
        
        ajaxReq({
            url:'/api/lib/front',
            data:postData,
            succFun:function(res) {
                if(res.code == '000') {
                    var rows = res.rows||[];
                    var htmls = [];
                    for(var i=0; i<rows.length; i++) {
                        var site_link = '';
                        var git_link = '';
                        var intros = [];
                        if(rows[i].lib_intro_show) {
                            intros.push(rows[i].lib_intro_show);
                        }
                        if(rows[i].lib_intro_res) {
                            intros.push(rows[i].lib_intro_res);
                        }
                        if(rows[i].lib_site) {
                            site_link = '<a href="'+rows[i].lib_site+'" class="home_link" target="_blank">官网</a>';
                        }
                        if(rows[i].lib_github) {
                            git_link = '<a href="'+rows[i].lib_github+'" class="git_link" target="_blank">Github地址</a>';
                        }
                        htmls.push('<div class="lib_item">');
                        htmls.push(' <p class="lib_name">'+rows[i].lib_name+'</p>');
                        htmls.push(' <p class="lib_intro">'+intros.join("<br />")+'</p>');
                        htmls.push(' <p class="lib_link">'+site_link+git_link+'</p>');
                        htmls.push('</div>');
                    }
                    result_box.eq(0).html(htmls.join(''));
                }
            }
        });
    }

    function photo_search() {
        var _sel = $('input[name="search_site"]:checked');
        if(_sel) {
            window.open(_sel.val() + encodeURIComponent(_inputEl.val()));
        }
    }

})(jQuery);
</script>