<link rel="stylesheet" href="/static/plugins/codemirror/codemirror.css" />
<style>
.CodeMirror { height:98%; }
</style>
<div style="margin-top:60px">
  <div class="pos_fixed btn_view">
      <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal"><i class="fa  fa-cog fa-fw"></i> 设置</button>
  </div>
  <div class="">
    <div class="flab-tool">
      <form id="flabForm" target="flabview">
        <div class="flab-tool-item">
          <textarea id="htmlCoder" placeholder="请输入HTML代码"></textarea>
        </div>
        <div class="flab-tool-item">
          <textarea id="cssCoder" placeholder="请输入CSS代码"></textarea>
        </div>
        <div class="flab-tool-item">
          <textarea id="jsCoder" placeholder="请输入Javascript代码"></textarea>
        </div>
    </form>
    </div>
    <div class="flab-cont">
      <iframe id="flabview" name="flabview" style="border:none;width:100%;height:100%;"></iframe>
    </div>
  </div>
</div>

<script src="/static/plugins/codemirror/codemirror.js"></script>
<script>
(function($) {

  
  function initView(){

    var all = $(window).height()-60;
    var itemH = parseInt(all/3);
    $('.flab-tool-item').css({ height:(itemH-5)+'px' });
    $('#flabview').css({ height: all+'px' });
  }

  initView();

  var htmldom = document.getElementById('htmlCoder');
  var cssdom = document.getElementById('cssCoder');
  var jsdom = document.getElementById('jsCoder');

  var htmlEditor = CodeMirror.fromTextArea(htmldom, {
    lineNumbers: true,
    placeholder:'1111' //显示代码行数
  });

})(jQuery);
</script>