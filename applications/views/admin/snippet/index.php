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
                <button id="onData" type="button" class="btn btn-primary">同步数据</button>
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

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">获取代码段数据</h4>
            </div>
            <div class="modal-body">
                <ul id="dataList">

                </ul>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
var moduleURL = '/admin/snippet';

(function($) {

    var myModal = $('#myModal');

    $('#onData').on('click' , function() {
        _reqCurl(1);
        myModal.modal('show');
    });

    $('#dataList').off().on('click' , '[data-id]' , function() {
        var _id = $(this).data('id');
        if(_dataList[_id]) {
            var _data = _dataList[_id];
            var _saveData = {
                c_title:_data.description,
                c_id:0,
                c_cateid:0,
                c_cont:'',
                files:JSON.stringify(_data.files)
            };
            ajaxReq({
                url:'/admin/snippet/save',
                data: _saveData,
                succFun:function(res) {
                    if(res.code == '000') {
                        location.href = '/admin/snippet';
                    } else {
                        alert(res.msg);
                    }
                }
            });
        }
    })

    var _dataList = {};
    function _reqCurl(pageNo) {
        ajaxReq({
            url:moduleURL+'/ondata',
            data:{ pageNo:pageNo },
            succFun:function(res) {
                if(res.code == '000') {
                    var rows = res.rows||[];
                    var liEls = [];
                    for(var i=0; i<rows.length; i++) {
                        _dataList[rows[i].id] = rows[i];
                        liEls.push('<li>'+rows[i].description+'&nbsp;&nbsp;<a href="'+rows[i].html_url+'" target="_blank">预览内容</a>&nbsp;&nbsp;<a href="javascript:;" data-id="'+rows[i].id+'">同步数据</a></li>');
                    }
                    $('#dataList').html(liEls.join(''));
                } else {
                    alert(res.msg);
                }
            }
        });
    }
})(jQuery);
</script>