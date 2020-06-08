<div class="container  mt-90">
    <div class="form-group">
        <input type="text" id="search_name" class="input-block text-center" placeholder="请输入您要搜索的内容" />
    </div>
    <div class="flex-spaces tabs">
        <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1">搜库</label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2">搜图</label>

        <input id="tab3" type="radio" name="tabs">
        <label for="tab3">知识点</label>

        <div class="content" id="content1">
            <div class="row">
                <div class="md-8 sm-12 col card-btm-20 home_search_result">
                    数据加载中...
                </div>
                <div class="md-4 sm-12 col sidebar">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">标签</h4>
                            <div class="row category_box"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content" id="content2">
            <fieldset class="form-group">
                <label for="paperRadios1" class="paper-radio">
                    <input type="radio" checked="checked" name="search_site" id="paperRadios1" value="https://www.piqsels.com/zh/search?q="> <span>Piqsels（中文）<span>
                </label>
                <label for="paperRadios2" class="paper-radio">
                    <input type="radio" name="search_site" id="paperRadios2" value="https://uxwing.com/?s="> <span> Pxfuel（英文）<span>
                </label>
                <label for="paperRadios3" class="paper-radio">
                    <input type="radio" name="search_site" id="paperRadios3" value="https://www.piqsels.com/zh/search?q="> <span> UXWING（英文）<span>
                </label>
            </fieldset>
        </div>
        <div class="content" id="content3">
            Working on it...(建设中)
        </div>
    </div>
</div>
<script>
(function($) {

    var panels = $('.home_search_panels');
    var _inputEl = $('#search_name');
    var category_box = $('.category_box');
    var result_box = $('.home_search_result');
    var show_index = 0;
    var lib_cateids = {};

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
    _inputEl.off().on('keyup' , function(e) {
        if(e.keyCode != 13) {
            return;
        }
        if(!_inputEl.val()) {
            alert('请输入搜索关键字');
            return;
        }
        if(show_index == 0) {
            lib_search();
        } else if(show_index == 1) {
            photo_search();
        } else {
            wiki_search();
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
                        htmls.push('<div class="card">');
                        htmls.push(' <div class="card-body">');
                        htmls.push('  <h4 class="card-title">'+rows[i].lib_name+'</h4>');
                        htmls.push('  <p class="card-text">'+intros.join("<br />")+'</p>');
                        htmls.push('  <p class="lib_link">'+site_link+git_link+'</p>');
                        htmls.push(' </div>');
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

    function wiki_search() {
        
        ajaxReq({
            url:'/api/lib/frontwiki',
            data:{
                key_word:_inputEl.val()
            },
            succFun:function(res) {
                if(res.code == '000') {
                    var rows = res.rows||[];
                    var htmls = [];
                    for(var i=0; i<rows.length; i++) {
                        var site_link = '';
                        var git_link = '';
                        var c_tags_arr = (rows[i].c_tag||'').split(',');
                        var c_tags = [];
                        for(var t_index=0; t_index<c_tags_arr.length; t_index++) {
                            c_tags.push('<a href="javascript:;" data-tag="'+c_tags_arr[t_index]+'">'+c_tags_arr[t_index]+'</a>');
                        }
                        htmls.push('<div class="lib_item">');
                        htmls.push(' <h4 class="lib_name">'+rows[i].c_title+'</h4>');
                        htmls.push(' <h4 class="lib_cont">'+rows[i].c_cont+'</h4>');
                        htmls.push(' <p class="lib_tag">'+c_tags.join()+'</p>');
                        htmls.push('</div>');
                    }
                    result_box.eq(1).html(htmls.join('')).show();
                }
            }
        });
    }

})(jQuery);
</script>