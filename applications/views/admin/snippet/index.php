<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">代码列表</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" class="btn btn-primary" onclick="location.href='/admin/snippet/add';">新增代码段</button>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="400px">代码说明</th>
                            <th>编程语言</th>
                            <th>来源</th>
                            <th>发布时间</th>
                            <th>操作</th>
                        </tr>
                        <tbody>
                            <?php foreach($rows as $row):?>
                            <tr>
                                <td ><?php echo $row['c_title'];?></td>
                                <td ><?php echo $codenames[$row['c_cateid']];?></td>
                                <td ><a href="<?php echo $row['c_link'];?>" target="_blank"><?php echo $row['c_linktitle'];?></td>
                                <td><?php echo $row['c_pubdate'];?></td>
                                <td>
                                    <a href="javascript:;" onclick="location.href='/admin/snippet/add?c_id=<?php echo $row['c_id'];?>';">编辑</a>
                                    <a href="javascript:;" onclick="javascript:listDel(<?php echo $row['c_id'];?>)">删除</a>
                                </td>
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

<script>var moduleURL = '/admin/snippet';</script>