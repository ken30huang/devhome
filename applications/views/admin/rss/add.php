<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/rss">RSS管理</a></li>
        <li>RSS编辑</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">
                        <input type="hidden" id="rss_id" value="<?php echo getRowVal('rss_id' , $row , '0');?>" />
                        <div class="form-group">
                            <label>网站名称</label>
                            <input id="rss_name" field="rss_name" class="form-control" maxlength="255" placeholder="" value="<?php echo getRowVal('rss_name' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>网站链接 </label>
                            <input id="rss_siteurl" field="rss_siteurl" class="form-control" placeholder="" value="<?php echo getRowVal('rss_siteurl' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>RSS地址</label>
                            <input id="rss_link" field="rss_link" class="form-control" placeholder="" value="<?php echo getRowVal('rss_link' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>RSS Item</label>
                            <input id="rss_item" field="rss_item" class="form-control" placeholder="" value="<?php echo getRowVal('rss_item' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>RSS Title</label>
                            <input id="rss_item_title" field="rss_item_title" class="form-control" placeholder="" value="<?php echo getRowVal('rss_item_title' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>RSS URL</label>
                            <input id="rss_item_url" field="rss_item_url" class="form-control" placeholder="" value="<?php echo getRowVal('rss_item_url' , $row);?>" />
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
    if($('#rss_title').val() == '') {
        alert('请输入网站名称');
        return;
    }
    if($('#rss_siteurl').val() == '') {
        alert('请输入网站链接');
        return;
    }
    var _saveData = {
        rss_name:$('#rss_name').val(),
        rss_id:$('#rss_id').val(),
        rss_link:$('#rss_link').val(),
        rss_siteurl:$('#rss_siteurl').val(),
        rss_item:$('#rss_item').val(),
        rss_item_title:$('#rss_item_title').val(),
        rss_item_url:$('#rss_item_url').val()
    };
    ajaxReq({
        url:'/admin/rss/save',
        data: _saveData,
        succFun:function(res) {
            if(res.code == '000') {
                location.href = '/admin/rss';
            } else {
                alert(res.msg);
            }
        }
    });
}

</script>