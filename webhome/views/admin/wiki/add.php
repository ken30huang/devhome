<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/wiki">文档管理</a></li>
        <li>文档编辑</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">
                        <input type="hidden" id="c_id" value="<?php echo getRowVal('c_id' , $row , '0');?>" />
                        <div class="form-group">
                            <label>文档标题</label>
                            <input id="c_title" field="c_title" class="form-control" placeholder="" value="<?php echo getRowVal('c_title' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>文档封面</label>
                            <input id="c_thumb" field="c_thumb" class="form-control" placeholder="" value="<?php echo getRowVal('c_thumb' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>文档链接</label>
                            <input id="c_link" field="c_link" class="form-control" placeholder="" value="<?php echo getRowVal('c_link' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>发布时间</label>
                            <input id="c_linkdate" field="c_linkdate" class="form-control" placeholder="" value="<?php echo getRowVal('c_linkdate' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>SEO关键词</label>
                            <input id="c_seokeyword" field="c_seokeyword" class="form-control" placeholder="" value="<?php echo getRowVal('c_seokeyword' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>文档Tags</label>
                            <input id="taginput" class="form-control" placeholder="" />
                            <div class="checkbox">
                                <?php foreach($tags as $t):?>
                                <label><input type="checkbox" name="tagnames[]" value="<?php echo $t['tag_name'];?>" <?php echo isCheckSel('c_tag' , $row , $t['tag_name']);?>><?php echo $t['tag_name'];?></label>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>文档摘要</label>
                            <textarea id="c_summery" class="form-control" rows="4" placeholder=""><?php echo getRowVal('c_summery' , $row);?></textarea>
                        </div>
                        <button type="button" id="saveBtn" class="btn btn-primary">保存</button>
                        <button type="button" class="btn btn-default" onclick="javascript:history.back();">取消</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
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
    if($('#c_link').val() == '') {
        alert('请输入别名');
        return;
    }
    var tag = $('#taginput').val();
    $('[name="tagnames[]"]').each(function() {
        if(this.checked) {
            if(tag) {
                tag += ','+this.value;
            } else {
                tag = this.value;
            }
        }
    });
    var _saveData = {
        c_title:$('#c_title').val(),
        c_id:$('#c_id').val(),
        c_link:$('#c_link').val(),
        c_tag:tag,
        c_thumb:$('#c_thumb').val(),
        c_seokeyword:$('#c_seokeyword').val(),
        c_summery:$('#c_summery').val(),
        c_linkdate:$('#c_linkdate').val()
    };
    ajaxReq({
        url:'/admin/wiki/save',
        data: _saveData,
        succFun:function(res) {
            if(res.code == '000') {
                location.href = '/admin/wiki';
            } else {
                alert(res.msg);
            }
        }
    });
}

</script>