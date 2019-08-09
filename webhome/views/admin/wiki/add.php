<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/wiki">知识点</a></li>
        <li>知识点编辑</li>
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
                            <label>知识点名称</label>
                            <input id="c_title" field="c_title" class="form-control" placeholder="" value="<?php echo getRowVal('c_title' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>知识点来源</label>
                            <input id="c_link" field="c_link" class="form-control" placeholder="" value="<?php echo getRowVal('c_link' , $row);?>" />
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
                            <label>文章内容</label>
                            <textarea id="c_cont" field="c_cont" class="form-control" rows="4" placeholder=""><?php echo getRowVal('c_cont' , $row);?></textarea>
                        </div>
                        <button type="button" id="saveBtn" class="btn btn-primary">保存</button>
                        <button type="button" class="btn btn-default" onclick="javascript:history.back();">取消</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

<script>

(function($) {
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
    if($('#c_cont').val() == '') {
        alert('请输入内容');
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
        c_cont:$('#c_cont').val()
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