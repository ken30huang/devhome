<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/demo">DEMO管理</a></li>
        <li>DEMO编辑</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">
                        <input type="hidden" id="demo_id" value="<?php echo getRowVal('demo_id' , $row , '0');?>" />
                        <div class="form-group">
                            <label>Demo名称</label>
                            <input id="demo_name" field="demo_name" class="form-control" placeholder="" value="<?php echo getRowVal('demo_name' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>Demo描述</label>
                            <input id="demo_desc" field="demo_desc" class="form-control" placeholder="" value="<?php echo getRowVal('demo_desc' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>缩略图</label>
                            <input id="demo_thumb" field="demo_thumb" class="form-control" placeholder="" value="<?php echo getRowVal('demo_thumb' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>是否前端展示</label>
                            <input type="checkbox" id="demo_isfront" field="demo_isfront" value="1" <?php echo isCheckSel('demo_isfront' , $row , 1);?> />
                        </div>
                        <div class="form-group">
                            <label>是否编译项目</label>
                            <input type="checkbox" id="demo_iscompile" field="demo_iscompile" value="1" <?php echo isCheckSel('demo_iscompile' , $row , 1);?> />
                        </div>
                        <div class="form-group">
                            <label>Packjson内容</label>
                            <textarea id="demo_packjson" field="demo_packjson" class="form-control" rows="8" placeholder=""><?php echo getRowVal('c_mdcont' , $row);?></textarea>
                        </div>
                        <div class="form-group">
                            <label>选择库</label>
                            <div class="sel_list"></div>
                            <label>第三方库</label>
                            <div class="libs_list">
                                <?php foreach($lib_list as $lib):?>
                                <div class="lib_name">
                                    <h5><?php echo $lib['lib_name']; ?> <a href="javascript:;" data-id="<?php echo $lib['lib_id']; ?>" data-name="<?php echo $lib['lib_name']; ?>" class="lib_add">+</a></h5>
                                    <p><?php echo $lib['lib_intro']; ?></p>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <button type="button" id="saveBtn" class="btn btn-primary">保存</button>
                        <button type="button" class="btn btn-default" onclick="javascript:history.back();">取消</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>

(function($) {
    var _this = this;
    var _sel = {};
    <?php foreach($lib_sel as $sel):?>
    _sel[<?php echo $sel['lib_id']?>] = '<?php echo $sel['lib_name']?>';
    <?php endforeach;?>
    _renderSel();

    function _renderSel() {
        var _selhtml = [];
        for(var _lib_id in _sel) {
            _selhtml.push('<div class="lib_name">'+_sel[_lib_id]+' <a href="javascript:;" class="lib_del" data-id="'+_lib_id+'">-</a></div>');
        }
        $('.sel_list').html(_selhtml.join(''));
    }

    $('#saveBtn').on('click', function() {
        var lib_ids = [];
        for(var _lib_id in _sel) {
            lib_ids.push(_lib_id);
        }
        contSave(lib_ids.join());
    });

    $('.lib_add').on('click' , function() {
        var _id = $(this).data('id');
        if(!_sel[_id]) {
            _sel[_id] = $(this).data('name');
            _renderSel();
        };
    });

    $('.sel_list').on('click' , '.lib_del' , function(){
        var _id = $(this).data('id');
        if(_sel[_id]) {
            delete _sel[_id];
            _renderSel();
        };
    });

})(jQuery);

function contSave(lib_ids) {

    if($('#demo_name').val() == '') {
        alert('请输入DEMO名称');
        return;
    }
    if($('#demo_desc').val() == '') {
        alert('请输入DEMO描述');
        return;
    }
    var _saveData = {
        demo_name:$('#demo_name').val(),
        demo_id:$('#demo_id').val(),
        demo_desc:$('#demo_desc').val(),
        demo_libs:lib_ids,
        demo_iscompile:($('#demo_iscompile')[0].checked?1:0),
        demo_isfront:($('#demo_isfront')[0].checked?1:0),
        demo_packjson:$('#demo_packjson').val(),
        demo_thumb:$('#demo_thumb').val()
    };
    ajaxReq({
        url:'/admin/demo/save',
        data: _saveData,
        succFun:function(res) {
            if(res.code == '000') {
                location.href = '/admin/demo';
            } else {
                alert(res.msg);
            }
        }
    });
}

</script>