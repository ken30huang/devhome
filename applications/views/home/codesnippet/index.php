<link rel="stylesheet" href="/static/plugins/highlight/styles/an-old-hope.css" />
<div class="container mt-80 pd-lr-clear">
    <form>
        <div class="form-row align-items-center">
            <div class="col-sm-3 my-1">
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>编程语言</option>
                    <?php foreach($codenames as $cate_id=>$cate_name):?>
                    <option value="<?php echo $cate_id; ?>"><?php echo $cate_name; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="col-sm-3 my-1">
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="请输入关键字">
            </div>
            <div class="col-auto my-1">
                <button type="button" class="btn btn-primary">查找</button>
            </div>
        </div>
    </form>
</div>
<div class="container">
    <div class="row">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col" width="180px">语言/框架</th>
                    <th scope="col" width="380px">描述</th>
                    <th scope="col" width="500px">代码</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($rows as $row):?>
                <tr>
                    <td><?php echo $codenames[$row['c_cateid']];?></td>
                    <td>
                        <?php echo $row['c_title']; ?>
                        <p>
                        <?php if(!empty($row['c_link'])):?>
                        <a href="<?php echo $row['c_link'];?>" target="_blank" title="<?php echo $row['c_linktitle'];?>">
                        代码来源<img class="icons" src="<?php echo __STATIC__.'/icons/ico_link.svg'?>" /></a>
                        <?php endif;?>
                        </p>
                    </td>
                    <td><pre><code style="width:500px"><?php echo $row['c_cont']; ?></code></pre></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <?php echo $pager; ?>
    </div>
</div>

<script src="/static/plugins/highlight/highlight.pack.js"></script>
<script>
window.onload = function(){
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightBlock(block);
    });
}
</script>