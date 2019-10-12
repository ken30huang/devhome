<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">RSS管理</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/rss/add';">新增RSS</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>网站名称</th>
                            <th>网站链接</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['rss_name'];?></td>
                                <td><a href="<?php echo $row['rss_siteurl'];?>" target="_blank">查看网站</a></td>
                                <td>
                                    <a href="javascript:;" onclick="javascript:fillContent(<?php echo $row['rss_id'];?>)">同步内容</a>
                                    <a href="javascript:;" onclick="location.href='/admin/rss/add?rss_id=<?php echo $row['rss_id'];?>';">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['rss_id'];?>)">删除</a>
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
var moduleURL = '/admin/rss';

function fillContent(rss_id) {
    ajaxReq({
        url:moduleURL + '/parsecont',
        data: { rss_id:rss_id },
        succFun:function(res) {
            if(res.code == '000') {
                alert('同步成功');
            } else {
                alert(res.msg);
            }
        }
    });
}
</script>