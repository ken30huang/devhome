<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/lib">库管理</a></li>
        <li>库编辑</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" id="editForm">
                        <input type="hidden" id="lib_id" field="lib_id" value="<?php echo getRowVal('lib_id' , $row , '0');?>" />
                        <div class="form-group">
                            <label>库名称</label>
                            <input id="lib_name" field="lib_name" class="form-control" placeholder="" value="<?php echo getRowVal('lib_name' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>库主页</label>
                            <input id="lib_site" field="lib_site" class="form-control" placeholder="" value="<?php echo getRowVal('lib_site' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>Github地址</label>
                            <input id="lib_github" field="lib_github" class="form-control" placeholder="" value="<?php echo getRowVal('lib_github' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>文档地址</label>
                            <input id="lib_github" field="lib_github" class="form-control" placeholder="" value="<?php echo getRowVal('lib_github' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>库介绍</label>
                            <textarea id="lib_intro" field="lib_intro" class="form-control" rows="4" placeholder=""><?php echo getRowVal('lib_intro' , $row);?></textarea>
                        </div>
                        <div class="form-group">
                            <label>CSS链接</label>
                            <textarea id="lib_css" field="lib_css" class="form-control" rows="3" placeholder=""><?php echo getRowVal('lib_css' , $row);?></textarea>
                        </div>
                        <div class="form-group">
                            <label>JS链接</label>
                            <textarea id="lib_js" field="lib_js" class="form-control" rows="3" placeholder=""><?php echo getRowVal('lib_intro' , $row);?></textarea>
                        </div>
                        <div class="form-group">
                            <label>关键字</label>
                            <textarea id="lib_js" field="lib_js" class="form-control" rows="3" placeholder=""><?php echo getRowVal('lib_intro' , $row);?></textarea>
                        </div>
                        <div class="form-group">
                            <label>包下载地址</label>
                            <input id="lib_download" field="lib_download" class="form-control" placeholder="" value="<?php echo getRowVal('lib_github' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>lib_type</label>
                            <select class="form-control" id="lib_type" field="lib_type">
                                <option value="0" <?php echo getSelVal('lib_type' , '0' , $row)?>>开源项目</option>
                                <option value="1" <?php echo getSelVal('lib_type' , '1' , $row)?>>DEMO模板</option>
                            </select>
                        </div>
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

    if($('#lib_name').val() == '') {
        alert('请输入库名称');
        return false;
    }

    return true;
}

function saveCallback() {
    location.href = moduleURL;
}
</script>