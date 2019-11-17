<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/lib?page=<?php echo $page;?>">库管理</a></li>
        <li>库文件</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/lib/fileadd?page=<?php echo $page;?>&lib_id=<?php echo $lib_id;?>';">新增文件</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>文件名称</th>
                            <th>文件路径</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($file_list as $row):?>
                            <tr>
                                <td ><?php echo $row['file_name'];?></td>
                                <td><?php echo $row['file_url'];?></td>
                                <td>
                                    <a href="javascript:;" onclick="location.href='/admin/lib/fileadd?file_id=<?php echo $row['file_id'];?>&lib_id=<?php echo $lib_id;?>&page=<?php echo $page; ?>';">编辑</a>
                                    <a href="javascript:;" onclick="javascript:fileDel(<?php echo $row['lib_id'];?>)">删除</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->

<script>
var moduleURL = '/admin/lib';

function requestLib(lib_id) {
    ajaxReq({
        url:moduleURL+'/getdetail',
        data:{
            'lib_id':lib_id,
        },
        method:'POST',
        succFun:function(res) {
            console.log(res);
            if(res.code == '000') {
                location.reload();
            }
        }
    });
}
</script>