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
                            <label>库介绍（同步）</label>
                            <input id="lib_intro_res" field="lib_intro_res" class="form-control" placeholder="" value="<?php echo getRowVal('lib_intro_res' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>库介绍（简介）</label>
                            <input id="lib_intro_show" field="lib_intro_show" class="form-control" placeholder="" value="<?php echo getRowVal('lib_intro_show' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>库关键字</label>
                            <input id="lib_keyword" field="lib_keyword" class="form-control" placeholder="" value="<?php echo getRowVal('lib_keyword' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>库类型</label>
                            <div>
                                <?php foreach($cate_list as $cate): ?>
                                <label><input type="checkbox" field="lib_cateid" value="<?php echo $cate['cate_id'];?>" <?php if(getRowVal('lib_cateid' , $row)){ if(strpos($row['lib_cateid'], $cate['cate_id']) !== FALSE) { echo 'checked'; }; } ?>><?php echo $cate['cate_name'];?></label>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>是否显示</label>
                            <div>
                                <label><input type="radio" field="lib_status" name="lib_status" value="1" <?php if(getRowVal('lib_status' , $row)){ if(intval($row['lib_status']) === 1) { echo 'checked'; } } ?>/>是</label>
                                <label><input type="radio" field="lib_status" name="lib_status" value="-1" <?php if(getRowVal('lib_status' , $row)){ if(intval($row['lib_status']) === -1) { echo 'checked'; } } ?>/>否</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>是否留意</label>
                            <div>
                                <label><input type="radio" field="lib_remark" name="lib_remark" value="1" <?php if(getRowVal('lib_remark' , $row)){ if(intval($row['lib_remark']) === 1) { echo 'checked'; } } ?>/>是</label>
                                <label><input type="radio" field="lib_remark" name="lib_remark" value="-1" <?php if(getRowVal('lib_remark' , $row)){ if(intval($row['lib_remark']) === -1) { echo 'checked'; } } ?>/>否</label>
                            </div>
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
    location.href = moduleURL+'?page=<?php echo $_GET['page']; ?>';
}
</script>