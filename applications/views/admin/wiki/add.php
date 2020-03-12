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
                            <label>页面别名</label>
                            <input id="c_alias" field="c_alias" class="form-control" placeholder="" value="<?php echo getRowVal('c_alias' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>知识点来源</label>
                            <div class="row">
                                <div class="col-lg-6">
                                <input id="c_linktitle" field="c_linktitle" class="form-control" placeholder="来源标题" value="<?php echo getRowVal('c_linktitle' , $row);?>" />
                                </div>
                                <div class="col-lg-6">
                                <input id="c_link" field="c_link" class="form-control" placeholder="来源地址" value="<?php echo getRowVal('c_link' , $row);?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>摘要</label>
                            <textarea id="c_summery" field="c_summery" class="form-control" rows="3" placeholder=""><?php echo getRowVal('c_summery' , $row);?></textarea>
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
                            <label>缩略图</label>
                            <input id="c_thumb" field="c_thumb" class="form-control" placeholder="" value="<?php echo getRowVal('c_thumb' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>文章内容</label>
                            <textarea id="c_mdcont" field="c_mdcont" class="form-control" rows="6" placeholder=""><?php echo getRowVal('c_mdcont' , $row);?></textarea>
                            <div id="c_cont" class="img_fixed" style="border:1px solid #ccc;height:240px; padding:10px; overflow:auto;"><?php echo getRowVal('c_cont' , $row , '内容预览');?></div>
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
    var _this = this;
    $('#c_mdcont').on('keyup' , function() {
        var _showHTML = marked(this.value);
        $('#c_cont').html(_showHTML);
    });
    $('#saveBtn').on('click', function() {
        contSave();
    });

})(jQuery);

function contSave() {
    if($('#c_title').val() == '') {
        alert('请输入标题');
        return;
    }
    if($('#c_mdcont').val() == '') {
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
        c_cont:$('#c_cont').html(),
        c_mdcont:$('#c_mdcont').val(),
        c_linktitle:$('#c_linktitle').val(),
        c_alias:$('#c_alias').val(),
        c_thumb:$('#c_thumb').val(),
        c_summery:$('#c_summery').val()
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