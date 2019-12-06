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
        <div class="photo_tit">* 库来源：<a href="https://www.bootcdn.cn/" target="_blank">BootCDN</a>
        | <a href="https://www.uisdc.com/tag/%e9%85%b7%e7%ab%99" target="_blank">酷站-优设网</a> |
        <a href="https://javascriptweekly.com/">Javascript Week</a>
        <p>目前以前端库为主，逐渐扩展到php，python，c/c++，java等编程语言</p>
        </div>
        <div class="category_box lib_sel">
            <?php foreach($lib_cates as $cate_item):?>
            <a href="javascript:;" data-cateid="<?php echo $cate_item['cate_id'];?>"><?php echo $cate_item['cate_name']?></a>
            <?php endforeach;?>
        </div>
    </div>
    <div class="home_search_panels" style="display:none">
        <div class="photo_tit">* 特别声明：图片来源从<a href="https://pixabay.com" target="_blank">pixabay.com</a>实时获取，图片搜索会有点慢，请耐心等待。</div>
        <div class="category_box">
            <select id="photo_lang" class="photo_change">
                <option value="cn">中文</option>
                <option value="en">英文</option>
            </select>
            <select id="photo_type" class="photo_change">
                <option value="all">所有</option>
                <option value="photo">图片</option>
                <option value="illustration">插画</option>
                <option value="vector">矢量</option>
            </select>
            <select id="photo_category" class="photo_change">
                <option value="">全部类型</option>
                <option value="computer">计算机/沟通</option>
                <option value="science">科学/技术</option>
                <option value="music">音乐</option>
                <option value="travel">旅游度假</option>
                <option value="nature">自然风景</option>
                <option value="business">商业/金融</option>
                <option value="fashion">美妆/时尚</option>
                <option value="backgrounds">背景/花纹</option>
                <option value="education">教育</option>
                <option value="people">人物</option>
                <option value="feelings">表情</option>
                <option value="religion">宗教</option>
                <option value="health">医学/健康</option>
                <option value="places">地点/地标</option>
                <option value="animals">动物</option>
                <option value="industry">产业/技术</option>
                <option value="food">食物/饮料</option>
                <option value="sports">运动</option>
                <option value="transportation"></option>
                <option value="buildings">建筑</option>
            </select>
            每页显示：
            <select id="page_show" class="photo_change">
                <option value="40">40</option>
                <option value="60">60</option>
                <option value="60">80</option>
                <option value="60">100</option>
            </select>
            页码：
            <select id="page_num" class="photo_page_num">
                <option value="1">1</option>
            </select>
        </div>
    </div>
    <div class="home_search_result">
    </div>
    <div class="home_search_result clearfix">
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
        _this.addClass('sel');
        if(!lib_cateids[_this.data('cateid')]) {
            lib_cateids[_this.data('cateid')] = true;
        }
        lib_search();
    });
    $('.btn_search').click(function() {
        if(show_index == 0) {
            lib_search();
        } else {
            photo_search();
        }
    });

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
                        if(rows[i].lib_site) {
                            site_link = '<a href="'+rows[i].lib_site+'" class="home_link" target="_blank">官网</a>';
                        }
                        if(rows[i].lib_github) {
                            git_link = '<a href="'+rows[i].lib_github+'" class="git_link" target="_blank">Github地址</a>';
                        }
                        htmls.push('<div class="lib_item">');
                        htmls.push(' <p class="lib_name">'+rows[i].lib_name+'</p>');
                        htmls.push(' <p class="lib_intro">'+(rows[i].lib_intro_show||rows[i].lib_intro_res)+'</p>');
                        htmls.push(' <p class="lib_link">'+site_link+git_link+'</p>');
                        htmls.push('</div>');
                    }
                    result_box.eq(0).html(htmls.join(''));
                }
            }
        });
    }

    $('.photo_change').on('change' , function() {
        $('#page_num').val('1');
        photo_search(1);
    });
    $('#page_num').on('change' , function() {
        photo_search();
    });

    function photo_search() {
        result_box.eq(1).html('正在获取图片，请稍后...');
        var page_num = parseInt($('#page_num').val());
        var photo_lang = $('#photo_lang').val();
        var photo_type = $('#photo_type').val();
        var photo_category = $('#photo_category').val();
        var keyword = encodeURIComponent(_inputEl.val());
        var page_show = $('#page_show').val();
        if(!keyword) { return; }
        var url = '/api/photo/pixabay?q='+keyword+'&photo_lang='+photo_lang+'&photo_type='+photo_type+'&photo_category='+photo_category;
        url += '&page_num='+page_num + '&page_show='+page_show;
        ajaxReq({
            url:url,
            succFun:function(res) {
                var hits = res.hits||[];
                var htmls = [];
                for(var i=0; i<hits.length; i++) {
                    htmls.push('<div class="photo_item pos_rel">');
                    htmls.push(' <div class="photo_show"><img src="'+hits[i].webformatURL+'"></div>');
                    htmls.push(' <div class="photo_btns pos_abs"><a target="_blank" href="'+hits[i].largeImageURL+'">原始大图</a></div>');
                    htmls.push('</div>');
                }
                result_box.eq(1).html(htmls.join(''));

                if(page_num == 1) {
                    //重新计算页码
                    $('#page_num')[0].length = 1;
                    var total = res.total||0;
                    var pageTotal = Math.ceil(total/page_show);
                    if(pageTotal > 1) {
                        console.log('pageTotal = ' + pageTotal);
                        var start = 2;
                        while(start < pageTotal) {
                            $('#page_num').append('<option value="'+start+'">'+start+'</option>');
                            start ++;
                        }
                    }
                }
                
                
            }
        });
    }

})(jQuery);
</script>