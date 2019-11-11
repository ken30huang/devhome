<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">访问列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>IP地址</th>
                            <th>访问URL</th>
                            <th>访问时间</th>
                            <th>停留时间(s)</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['v_ip'];?></td>
                                <td><?php echo $row['v_link'];?></td>
                                <td><?php echo $row['v_logtime'];?></td>
                                <td><?php echo ceil($row['v_staytime']/1000);?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </thead>
                </table>
                <div class="pager"><?php echo $pager; ?></div>
            </div>
        </div>
    </div>
</div><!--/.row-->

<script>
var moduleURL = '/admin/article';
</script>