<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/snippet">代码段管理</a></li>
        <li>代码段编辑</li>
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
                            <label>代码段描述</label>
                            <input id="c_title" field="c_title" class="form-control" maxlength="255" placeholder="" value="<?php echo getRowVal('c_title' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>SEO关键词</label>
                            <input id="c_seokeyword" field="c_seokeyword" class="form-control" placeholder="" value="<?php echo getRowVal('c_seokeyword' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>来源</label>
                            <input id="c_link" field="c_link" class="form-control" placeholder="" value="<?php echo getRowVal('c_link' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>来源标题</label>
                            <input id="c_linktitle" field="c_linktitle" class="form-control" placeholder="" value="<?php echo getRowVal('c_linktitle' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>编程语言</label>
                            <select class="form-control" id="c_cateid" field="c_cateid">
                                <option value="0">请选择</option>
                                <?php foreach($code_list as $c):?>
                                <option value="<?php echo $c['cate_id']; ?>" <?php echo getSelVal('c_cateid' , $c['cate_id'] , $row);?>><?php echo $c['cate_name']; ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>代码</label>
                            <textarea id="c_cont" field="c_cont" class="form-control" rows="8" placeholder=""><?php echo getRowVal('c_cont' , $row);?></textarea>
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

    $('#saveBtn').on('click', function() {
        contSave();
    });

})(jQuery);

function contSave() {
    if($('#c_title').val() == '') {
        alert('请输入标题');
        return;
    }

    var file_code_keys = $('.file_code_key');
    var file_code_conts = $('.file_code_cont');
    var _files = {};
    file_code_keys.each(function(index) {
        _files[this.value] = { content: (file_code_conts.eq(index).val()||'') };
    });
    var _saveData = {
        c_title:$('#c_title').val(),
        c_id:$('#c_id').val(),
        c_seokeyword:$('#c_seokeyword').val(),
        c_cateid:$('#c_cateid').val(),
        c_cont:$('#c_cont').val(),
        c_link:$('#c_link').val(),
        c_linktitle:$('#c_linktitle').val(),
    };
    ajaxReq({
        url:'/admin/snippet/save',
        data: _saveData,
        succFun:function(res) {
            if(res.code == '000') {
                location.href = '/admin/snippet';
            } else {
                alert(res.msg);
            }
        }
    });
}

</script>