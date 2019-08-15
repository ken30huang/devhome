<div class="row">
    <ol class="breadcrumb">
        <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active"><a href="/admin/page">页面管理</a></li>
        <li>页面编辑</li>
    </ol>
</div><!--/.row-->				

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form">
                        <input type="hidden" id="c_id" value="<?php echo getRowVal('c_id' , $row , '0');?>" />
                        <div class="form-group">
                            <label>页面标题</label>
                            <input id="c_title" field="c_title" class="form-control" placeholder="" value="<?php echo getRowVal('c_title' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>页面别名</label>
                            <input id="c_alias" field="c_alias" class="form-control" placeholder="" value="<?php echo getRowVal('c_alias' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>上级页面</label>
                            <select class="form-control" id="c_parentid" field="c_parentid">
                                <option value="0">一级页面</option>
                                <?php foreach($parents as $p):?>
                                <option value="<?php echo $p['c_id']; ?>" <?php echo getSelVal('c_parentid' , $p['c_id'] , $row)?>><?php echo $p['c_title']; ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>SEO关键词</label>
                            <input id="c_seokeyword" field="c_seokeyword" class="form-control" placeholder="" value="<?php echo getRowVal('c_seokeyword' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>SEO描述</label>
                            <input id="c_seodescription" field="c_seodescription" class="form-control" placeholder="" value="<?php echo getRowVal('c_seodescription' , $row);?>" />
                        </div>
                        <div class="form-group">
                            <label>页面内容</label>
                            <textarea id="c_mdcont" field="c_mdcont" class="form-control" rows="8" placeholder=""><?php echo getRowVal('c_mdcont' , $row);?></textarea>
                            <div id="showMd" style="border:1px solid #ccc;height:240px; padding:10px; overflow:auto;"><?php echo getRowVal('c_cont' , $row , '内容预览');?></div>
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
    $('#c_mdcont').on('keyup' , function() {
        var _showHTML = marked(this.value);
        $('#showMd').html(_showHTML);
    });
    var _this = this;

    $('#saveBtn').on('click', function() {
        contSave();
    });

})(jQuery);

function contSave() {
    if($('#c_title').val() == '') {
        alert('请输入标题');
        return;
    }
    if($('#c_alias').val() == '') {
        alert('请输入别名');
        return;
    }
    if($('#c_summery').val() == '') {
        alert('请输入内容摘要');
        return;
    }
    var _saveData = {
        c_title:$('#c_title').val(),
        c_id:$('#c_id').val(),
        c_alias:$('#c_alias').val(),
        c_parentid:$('#c_parentid').val(),
        c_seokeyword:$('#c_seokeyword').val(),
        c_seodescription:$('#c_seodescription').val(),
        c_summery:$('#c_summery').val(),
        c_cont:$('#showMd').html(),
        c_mdcont:$('#c_mdcont').val()
    };
    ajaxReq({
        url:'/admin/page/save',
        data: _saveData,
        succFun:function(res) {
            if(res.code == '000') {
                location.href = '/admin/page';
            } else {
                alert(res.msg);
            }
        }
    });
}

</script>