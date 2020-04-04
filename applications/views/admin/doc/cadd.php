<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/doc/nav">文档导航</a></li>
        <li class="active"><a href="/admin/doc/clist?dn_id=<?php echo $dn_id;?>">文档管理</a></li>
        <li>文档编辑</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">
                        <div class="form-group">
                            <label>文章标题</label>
                            <input id="c_title" field="c_title" class="form-control" placeholder="" value="<?php echo getRowVal('c_title' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>文章摘要</label>
                            <textarea id="c_summery" class="form-control" rows="4" placeholder=""><?php echo getRowVal('c_summery' , $row);?></textarea>
                        </div>
                        <div class="form-group">
                            <label>文章内容</label>
                            <textarea id="c_mdcont" field="c_mdcont" class="form-control" rows="8" placeholder=""><?php echo getRowVal('c_mdcont' , $row);?></textarea>
                            <div id="showMd" style="border:1px solid #ccc;height:240px; padding:10px; overflow:auto;"><?php echo getRowVal('c_cont' , $row , '内容预览');?></div>
                        </div>
                        <button type="button" id="saveBtn" class="btn btn-primary">保存</button>
                        <button type="button" class="btn btn-default" onclick="javascript:history.back();">取消</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

<script src="/static/plugins/marked/marked.min.js"></script>
<script>

(function($) {
    $('#c_mdcont').on('keyup' , function() {
        var _showHTML = marked(this.value);
        $('#showMd').html(_showHTML);
    });
    var _this = this;

    $('#saveBtn').on('click', function() {
        contSave();
    });

})(jQuery);

function contSave() {
    if($('#c_title').val() == '') {
        alert('请输入标题');
        return;
    }
    var _saveData = {
        c_title:$('#c_title').val(),
        c_id:'<?php echo getRowVal('c_id' , $row , '0');?>',
        c_cateid:<?php echo $dn_id;?>,
        c_summery:$('#c_summery').val(),
        c_cont:$('#showMd').html(),
        c_mdcont:$('#c_mdcont').val(),
        c_type:'doc'
    };
    ajaxReq({
        url:'/admin/doc/csave',
        data: _saveData,
        succFun:function(res) {
            if(res.code == '000') {
                location.href = '/admin/doc/clist?dn_id=<?php echo $dn_id;?>';
            } else {
                alert(res.msg);
            }
        }
    });
}

</script>