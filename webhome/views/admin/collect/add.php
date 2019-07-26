<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/snippet">网站收藏管理</a></li>
        <li>网站收藏编辑</li>
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
                            <label>网站名称</label>
                            <input id="c_title" field="c_title" class="form-control" maxlength="255" placeholder="" value="<?php echo getRowVal('c_title' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>网站链接 </label>
                            <input id="c_link" field="c_link" class="form-control" placeholder="" value="<?php echo getRowVal('c_link' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>SEO关键词</label>
                            <input id="c_seokeyword" field="c_seokeyword" class="form-control" placeholder="" value="<?php echo getRowVal('c_seokeyword' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>收藏类型</label>
                            <select class="form-control" id="c_cateid" field="c_cateid">
                                <option value="0">请选择</option>
                                <?php foreach($type_list as $c):?>
                                <option value="<?php echo $c['cate_id']; ?>" <?php echo getSelVal('c_cateid' , $c['cate_id'] , $row);?>><?php echo $c['cate_name']; ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>网站介绍</label>
                            <textarea id="c_cont" class="form-control" rows="4" placeholder=""><?php echo getRowVal('c_cont' , $row);?></textarea>
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
        alert('请输入网站名称');
        return;
    }
    if($('#c_link').val() == '') {
        alert('请输入网站链接');
        return;
    }
    if(parseInt($('#c_cateid').val())===0) {
        alert('请选择分类');
        return;
    }
    var _saveData = {
        c_title:$('#c_title').val(),
        c_id:$('#c_id').val(),
        c_link:$('#c_link').val(),
        c_cateid:$('#c_cateid').val(),
        c_seokeyword:$('#c_seokeyword').val(),
        c_cont:$('#c_cont').val()
    };
    ajaxReq({
        url:'/admin/collect/save',
        data: _saveData,
        succFun:function(res) {
            if(res.code == '000') {
                location.href = '/admin/collect';
            } else {
                alert(res.msg);
            }
        }
    });
}

</script>