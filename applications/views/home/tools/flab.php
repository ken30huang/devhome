<link href="/static/plugins/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/static/plugins/codemirror/codemirror.css" />
<style>
.CodeMirror { height:94%; width:98%; margin:20px; border:1px solid #eee; border-radius:4px; }
.lib-list { height:126px; overflow:auto; }
.flab-cont { background-color:#f1f1f1; position:relative; }
.flab-cont .btn-download { position:absolute; top:0; right:0;}
.flab-tool-item { position:relative; }
.flab-tool-item .flab-tool-tit { position:absolute; top:-22px; right:0; color:#666; z-index:99; font-size:12px; }
</style>
<div class="container-fluid">
  <div class="pos_fixed btn_view">
      
      <?php if($islogin):?>
      <button type="button" id="savePop" class="btn btn-primary" data-toggle="modal"><i class="fa fa-cog fa-fw"></i>保存</button>
      <?php endif;?>
  </div>
  <div class="row col-12">
    <div class="flab-tool col-4">
      <form id="flabForm" target="flabview" action="/home/tools/flabview" method="POST">
        <div class="flab-tool-item">
          <div class="flab-tool-tit">HTML代码</div>
          <textarea id="htmlCoder" placeholder="请输入HTML代码"></textarea>
        </div>
        <div class="flab-tool-item">
          <div class="flab-tool-tit">CSS代码
            <select id="cssType">
              <option value="css">css</option>
            </select>
          </div>
          <textarea id="cssCoder" placeholder="请输入CSS代码"></textarea>
        </div>
        <div class="flab-tool-item">
          <div class="flab-tool-tit">JS代码
            <select id="jsType">
              <option value="javascript">javascript</option>
              <option value="babel">React/Babel</option>
              <option value="vue">Vue</option>
            </select>
          </div>
          <textarea id="jsCoder" placeholder="请输入Javascript代码"></textarea>
        </div>
        <textarea id="pageData" name="pageData" style="display:none"></textarea>
      </form>
    </div>
    <div class="flab-cont col-8">
      <button type="button" id="createHTML" class="btn btn-primary btn-download" data-toggle="modal"><i class="fa fa-cog fa-fw"></i>生成HTML</button>
      <iframe id="flabview" name="flabview" style="border:none;width:100%;height:100%;"></iframe>
    </div>
  </div>
</div>

<div id="saveModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>标题</label>
          <input type="text" id="txtTitle" class="form-control" />
        </div>
        <div class="form-group">
          <label >简介</label>
          <textarea class="form-control" id="txtSummery" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label >分类</label>
          <div class="form-row">
            <select id="txtCate">
              <?php foreach($cate_list as $cate_item):?>
              <option value="<?php echo $cate_item['cate_id'];?>"><?php echo $cate_item['cate_name'];?></option>
              <?php endforeach;?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>同步</label>
          <div class="form-row">
            <select id="txtPost">
              <option value="1">代码</option>
              <option value="2">Demo & 代码</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="saveBtn" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<script src="/static/js/libs/jquery/jquery.min.js"></script>
<script src="/static/plugins/bootstrap4/js/bootstrap.min.js"></script>
<script src="/static/js/comm.js?v=1.0.0"></script>
<script src="/static/plugins/codemirror/codemirror.js"></script>
<script>
(function($) {

  
  function initView(){

    var all = $(window).height()-60;
    var itemH = parseInt(all/3);
    $('.flab-tool-item').css({ height:(itemH-20)+'px' });
    $('#flabview').css({ height: (all-60)+'px' });
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
    lineNumbers: true,
    lineWrapping:true
  });

  var editCont = { html:'', css:'' , js:'', cssLinks:[], jsLink:[] , jstype:'javascript',csstype:'css' };
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

  $('#cssType').on('change' , function() {
    editCont.csstype = $('#cssType').val();
    refreshCont();
  });
  $('#jsType').on('change' , function() {
    editCont.jstype = $('#jsType').val();
    refreshCont();
  });
  $('#savePop').on('click' , function() {
    $('#saveModal').modal('show');
  });
  $('#saveBtn').on('click' , function() {
    var title = $('#txtTitle').val();
    var summery = $('#txtSummery').val();
    if(!title || !summery) {
      alert('请输入名称或内容');
      return;
    }
    ajaxReq({
      url:'/home/flab/save',
      data:{
        pageData:JSON.stringify(editCont),
        title:title,
        summery:summery,
        postType:parseInt($('#txtPost').val()),
        cateid:parseInt($('#txtCate').val()),
      },
      succFun:function(res) {
        if(res.code == '000') {
          location.reload();
        } else {
          alert(res.msg);
        }
      }
    })
  });

  $('#createHTML').on('click' , function() {
    if(!editCont.html) {
      return;
    }
    refreshCont(1);
  });

  var postTimer;
  function refreshCont(isExport) {
    var flabForm = document.getElementById('flabForm');
    if(isExport) {
      editCont.export = 1;
      flabForm.target = '_blank';
    } else {
      editCont.export && (delete editCont.export);
      flabForm.target = 'flabview';
    }
    postTimer && clearTimeout(postTimer);
    postTimer = setTimeout(function() {
      postCont();
    } , 800);
  }

  function postCont() {
    var flabForm = document.getElementById('flabForm');
    var pageData = document.getElementById('pageData');
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
    pageData.value = JSON.stringify(editCont);
    flabForm.submit();
  }

})(jQuery);
</script>