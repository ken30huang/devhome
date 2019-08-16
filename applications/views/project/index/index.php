<div class="container mt-80">
    <div class="">
        <button id="btnAdd" type="button" class="btn btn-outline-info">新增项目</button>
    </div>
    <div class="row mt-20">
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                <th scope="col">项目名称</th>
                <th scope="col">操作</th>
                </tr>
            </thead>
            <tbody id="proj_list">
                <?php foreach($proj_list as $proj):?>
                <tr>
                    <td><?php echo $proj['proj_name']; ?></td>
                    <td>
                        <a href="<?php echo module_url('/index/funcs/'.$proj['proj_id']);?>">管理</a>
                        <a href="javascript:;" class="edit" data-id="<?php echo $proj['proj_id'];?>" data-name="<?php echo $proj['proj_name'];?>">编辑</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="proj_name" placeholder="请输入项目名称">
            </div>
        </form>
      </div>
      <div id="modalbtns" class="modal-footer">
        <button type="button" class="btn btn-secondary btn-cancel" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary btn-save">确定</button>
      </div>
    </div>
  </div>
</div>

<script>

(function($) {

    $('#btnAdd').click(function() {
        _edit_id = 0;
        $('#proj_name').val('');
        $('#editModalTitle').text('添加项目');
        $('#addModal').modal('show');
    });

    var _edit_id = 0;
    $('#proj_list').off().on('click' , '.edit',function() {
        _edit_id = $(this).data('id');
        $('#proj_name').val($(this).data('name'));
        $('#editModalTitle').text('编辑项目');
        $('#addModal').modal('show');
    });

    $('.btn-save').click(function() {

    });
})(jQuery);

</script>