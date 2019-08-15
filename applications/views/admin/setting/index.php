<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" id="editForm">
                        <input type="hidden" id="setting_id" field="setting_id" value="<?php echo getRowVal('setting_id' , $row , '0');?>" />
                        <div class="form-group">
                            <label>网站标题</label>
                            <input id="setting_title" field="setting_title" class="form-control" placeholder="" value="<?php echo getRowVal('setting_title' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>网站关键字</label>
                            <input id="setting_keyword" field="setting_keyword" class="form-control" placeholder="" value="<?php echo getRowVal('setting_keyword' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>网站描述</label>
                            <input id="setting_desc" field="setting_desc" class="form-control" placeholder="" value="<?php echo getRowVal('setting_desc' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>网站介绍</label>
                            <input id="setting_intro" field="setting_intro" class="form-control" placeholder="" value="<?php echo getRowVal('setting_intro' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>邮箱地址</label>
                            <input id="setting_email" field="setting_email" class="form-control" placeholder="" value="<?php echo getRowVal('setting_email' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>邮箱STMP</label>
                            <input id="setting_stmp" field="setting_stmp" class="form-control" placeholder="" value="<?php echo getRowVal('setting_stmp' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>邮箱POP3</label>
                            <input id="setting_pop3" field="setting_pop3" class="form-control" placeholder="" value="<?php echo getRowVal('setting_pop3' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>网站信息</label>
                            <input id="setting_msg" field="setting_msg" class="form-control" placeholder="" value="<?php echo getRowVal('setting_msg' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>是否开启</label>
                            <select class="form-control" id="setting_status" field="setting_status">
                                <option value="0" <?php echo getSelVal('setting_status' , '0' , $row)?>>否</option>
                                <option value="1" <?php echo getSelVal('setting_status' , '1' , $row)?>>是</option>
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

var moduleURL = '/admin/setting';
var formData = {};

function formValid() {

    if($('#setting_title').val() == '') {
        alert('请输入网站标题');
        return false;
    }
    if($('#setting_email').val() == '') {
        alert('请输入邮箱地址');
        return false;
    }
    return true;
}
</script>