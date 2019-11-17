<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">前端第三方库</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/lib/add';">新增库</button>
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/lib/add';">新增库</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>库名称</th>
                            <th>官网</th>
                            <th>Github地址</th>
                            <th>Version</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['lib_name'];?></td>
                                <td><a href="<?php echo $row['lib_site'];?>" target="_blank"><?php echo $row['lib_site'];?></a></td>
                                <td><a href="<?php echo $row['lib_github'];?>" target="_blank"><?php echo $row['lib_github'];?></a></td>
                                <td ><?php echo $row['lib_version'];?></td>
                                <td>
                                    <a href="javascript:;" onclick="javascript:requestLib(<?php echo $row['lib_id'];?>);">同步内容</a>
                                    <a href="/admin/lib/filelist?lib_id=<?php echo $row['lib_id'];?>&page=<?php echo $page; ?>">文件列表</a>
                                    <a href="javascript:;" onclick="location.href='/admin/lib/add?lib_id=<?php echo $row['lib_id'];?>&page=<?php echo $page; ?>';">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['lib_id'];?>)">删除</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </thead>
                </table>
                <div class="pager mypager">
                    <?php echo $pager; ?>
                </div>
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