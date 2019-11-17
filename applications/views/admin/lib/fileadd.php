<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/lib?page=<?php echo $page;?>">库管理</a></li>
        <li>文件编辑</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" id="editForm">
                        <input type="hidden" id="file_id" field="file_id" value="<?php echo getRowVal('file_id' , $file_row , '0');?>" />
                        <div class="form-group">
                            <label>文件名称</label>
                            <input id="file_name" field="file_name" class="form-control" placeholder="" value="<?php echo getRowVal('file_name' , $file_row);?>" />
                        </div>
                        <div class="form-group">
                            <label>文件类型</label>
                            <div>
                                <label><input type="radio" field="file_type" name="file_type" value="js" <?php if(getRowVal('file_type' , $file_row)){ if($file_row['file_type'] === 'js') { echo 'checked'; } } ?>/>Javascript</label>
                                <label><input type="radio" field="file_type" name="file_type" value="css" <?php if(getRowVal('file_type' , $file_row)){ if($file_row['file_type'] === 'css') { echo 'checked'; } } ?>/>css</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>文件连接</label>
                            <input id="file_url" field="file_url" class="form-control" placeholder="" value="<?php echo getRowVal('file_url' , $file_row);?>" />
                        </div>
                        <input type="hidden" field="lib_id" name="lib_id" value="<?php echo $lib_id; ?>" />
                        <input type="hidden" field="save_opr" name="save_opr" value="file" />
                        <button type="button" onclick="javascript:formSave()" class="btn btn-primary">保存</button>
                        <button type="button" class="btn btn-default" onclick="javascript:history.back();">取消</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

<script>

var moduleURL = '/admin/lib';
var formData = {};

function formValid() {

    if($('#file_name').val() == '') {
        alert('请输文件名称');
        return false;
    }

    if($('#file_url').val() == '') {
        alert('请输文件链接');
        return false;
    }

    return true;
}

function saveCallback() {
    location.href = moduleURL+'/filelist?lib_id=<?php echo $lib_id;?>&page=<?php echo $_GET['page']; ?>';
}
</script>