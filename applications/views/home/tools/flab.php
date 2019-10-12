<link rel="stylesheet" href="/static/plugins/codemirror/codemirror.css" />
<style>
.CodeMirror { height:98%; width:98%; }
.lib-list { height:126px; overflow:auto; }
</style>
<div style="margin-top:60px">
  <div class="pos_fixed btn_view">
      <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal"><i class="fa  fa-cog fa-fw"></i> 设置</button>
  </div>
  <div class="">
    <div class="flab-tool">
      <form id="flabForm" target="flabview" action="/home/tools/flabview" method="POST">
        <div class="flab-tool-item">
          <textarea id="htmlCoder" placeholder="请输入HTML代码"></textarea>
        </div>
        <div class="flab-tool-item">
          <textarea id="cssCoder" placeholder="请输入CSS代码"></textarea>
        </div>
        <div class="flab-tool-item">
          <textarea id="jsCoder" placeholder="请输入Javascript代码"></textarea>
        </div>
        <textarea id="pageData" name="pageData" style="display:none"></textarea>
      </form>
    </div>
    <div class="flab-cont">
      <iframe id="flabview" name="flabview" style="border:none;width:100%;height:100%;"></iframe>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">编辑设置
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid ">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Javascript编辑模式</label>
              <div>
                <select id="jstype">
                  <option value="javascript">Javascript</option>
                  <option value="babel">Babel</option>
                </select>
              </div>
            </div>
            <div class="form-group form-check lib-list">
              <?php foreach($libs as $lib): ?>
              <div>
              <label class="form-check-label" title="<?php echo $lib['lib_intro'];?>">
                <input type="checkbox" name="libNames[]" ftype="<?php echo $lib['ftype'];?>" value="<?php echo $lib['url'];?>" class="form-check-input"> <?php echo $lib['name'];?>
              </label>
              </div>
              <?php endforeach; ?>
            </div>
            <button type="button" data-dismiss="modal" class="btn btn-primary">确定</button>
            <?php if(isset($_SESSION['user'])):?>
            <button type="button" data-dismiss="modal" class="btn btn-primary">保存</button>
            <?php endif; ?>
          </form>
        </div>
      </div>
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
    lineWrapping:true
  });
  var cssEditor = CodeMirror.fromTextArea(cssdom, {
    lineNumbers: true
  });
  var jsEditor = CodeMirror.fromTextArea(jsdom, {
    lineNumbers: true
  });

  var editCont = { html:'', css:'' , js:'', cssLinks:[], jsLink:[] , jstype:'javascript' };
  htmlEditor.on('change' , function() {
    editCont.html = htmlEditor.getValue();
    refreshCont();
  });
  cssEditor.on('change' , function() {
    editCont.css = cssEditor.getValue();
    refreshCont();
  });
  jsEditor.on('change' , function() {
    editCont.js = jsEditor.getValue();
    refreshCont();
  });

  var postTimer;
  function refreshCont() {
    postTimer && clearTimeout(postTimer);
    postTimer = setTimeout(function() {
      postCont();
    } , 800);
  }

  function postCont() {
    var flabForm = document.getElementById('flabForm');
    var pageData = document.getElementById('pageData');
    var jstype = document.getElementById('jstype');
    var libNames = document.getElementsByName('libNames[]');
    editCont.cssLinks = [];
    editCont.jsLink = [];
    for(var i=0; i<libNames.length; i++ ) {
      if(libNames[i].getAttribute('ftype') == 'css') {
        editCont.cssLinks.push(libNames[i].value);
      } else if(libNames[i].getAttribute('ftype') == 'js') {
        editCont.jsLink.push(libNames[i].value);
      }
    }
    editCont.jstype = jstype.value+'';
    pageData.value = JSON.stringify(editCont);
    flabForm.submit();
  }

})(jQuery);
</script>