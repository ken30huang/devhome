<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/online">预设环境管理</a></li>
        <li>编辑</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">

                        <input type="hidden" id="env_id" value="<?php echo getRowVal('env_id' , $row , '0');?>" />
                        <div class="form-group">
                            <label>环境名称</label>
                            <input id="env_name" field="env_name" class="form-control" placeholder="" value="<?php echo getRowVal('env_name' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>环境描述</label>
                            <input id="env_desc" field="env_desc" class="form-control" placeholder="" value="<?php echo getRowVal('env_desc' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>预设CSS</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <input type="text" id="links_css" class="form-control search_key" />
                                        <span class="input-group-btn">
                                            <button data-type="css" class="btn btn-default btn-add-file" type="button">添加</button>
                                        </span>
                                    </div><!-- /input-group -->
                                    <div class="css_list">
                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                        </div>
                        <div class="form-group">
                            <label>预设JS</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <input type="text" id="links_js" class="form-control search_key" />
                                        <span class="input-group-btn">
                                            <button data-type="js" class="btn btn-default btn-add-file" type="button">添加</button>
                                        </span>
                                    </div><!-- /input-group -->
                                    <div class="js_list">
                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                        </div>
                        <div class="form-group">
                            <label>JS运行方式</label>
                            <select class="form-control" id="env_jstype" field="env_jstype">
                                <option value="javascript" <?php echo getSelVal('env_jstype' , 'javascript',$row);?>>javascript</option>
                                <option value="babel" <?php echo getSelVal('env_jstype' , 'babel',$row);?>>babel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>预设执行脚本</label>
                            <textarea id="env_jscode" field="env_jscode" class="form-control" rows="5"><?php echo getRowVal('env_jscode' , $row , '');?></textarea>
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

    var env_files = {
        js:[],
        css:[]
    };
    var item_envfiles = '<?php echo getRowVal('env_files' , $row , '');?>';
    if(item_envfiles) {
        env_files = JSON.parse(item_envfiles);
        console.log(env_files);
        for(var type_key in env_files) {
            _updateFiles(type_key);
        }
    }
    
    $('.btn-add-file').on('click' , function() {
        var _type = $(this).data('type');
        var _input = $('#links_'+_type);
        env_files[_type].push(_input.val());
        _updateFiles(_type);
        _input.val('');
    });
    $('.css_list,.js_list').on('click' , '.lib_del' , function(){
        var _type = $(this).data('type');
        var $list = $('.'+_type+'_list .lib_del');
        var _index = $list.index($(this));
        if(env_files[_type]) {
            env_files[_type] = env_files[_type].filter(function(item, index) {
                return index != _index;
            });
            _updateFiles(_type);
        }
    });

    function _updateFiles(type) {
        if(env_files[type]) {
            var htmls = env_files[type].map(function(link) {
                return '<p>'+link+'<a href="javascript:;" class="lib_del" data-type="'+type+'"><span aria-hidden="true">&times;</span></a></p>';
            });
            $('.'+type+'_list').html(htmls.join(''));
        }
        
    }

    $('#saveBtn').on('click', function() {
        var lib_ids = [];
        _contSave();
    });
    function _contSave(lib_ids) {

        if($('#env_name').val() == '') {
            alert('请输入环境名称');
            return;
        }
        if($('#env_desc').val() == '') {
            alert('请输入环境描述');
            return;
        }
        var env_id = $('#env_id').val();
        var _saveData = {
            env_name:$('#env_name').val(),
            env_jscode:$('#env_jscode').val(),
            env_desc:$('#env_desc').val(),
            env_jstype:$('#env_jstype').val(),
            env_files:JSON.stringify(env_files)
        };
        if(env_id != '0') {
            _saveData.env_id = parseInt(env_id);
        }
        ajaxReq({
            url:'/admin/online/save',
            data: _saveData,
            succFun:function(res) {
                if(res.code == '000') {
                    location.href = '/admin/online';
                } else {
                    alert(res.msg);
                }
            }
        });
    }

})(jQuery);

</script>