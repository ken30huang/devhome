<div class="container mt-80">
    <div class="search-form">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="请输入您要搜索的内容" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">搜索</button>
            </div>
        </div>
    </div>
</div>
<div class="container mt-20">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">最新博文</h5>
                    <div class="card-text">
                        <ul class="series_list">
                            <?php foreach($blog_list as $blog): ?>
                            <li><a href="/blog/detail/<?php echo $blog['c_alias']?>"><?php echo $blog['c_title']?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <a href="/blog" class="btn btn-primary">更多博文</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">系列文档</h5>
                    <div class="card-text">
                        <ul class="series_list">
                            <?php foreach($series_list as $series): ?>
                            <li><a href="<?php echo $series['c_link']?>" target="_blank"><?php echo $series['c_title']; ?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <a href="/series" class="btn btn-primary">更多系列文档</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-20">
    <h4>Demo展示</h4>
    <div class="row">
        <?php foreach($demo_list as $demo):?>
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="<?php echo $demo['demo_thumb'];?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><?php echo $demo['demo_name'];?></p>
                    <a href="/demos/front?demo_id=<?php echo $demo['demo_id'];?>" class="card-link">查看效果</a>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<div class="container mt-20 mb-60">
    <h4>知识点</h4>
    <dl class="row">
        <?php foreach($know_list as $know):?>
        <dt class="col-sm-3"><?php echo $know['c_title'];?></dt>
        <dd class="col-sm-9"><?php echo $know['c_cont'];?><a href="<?php echo $know['c_link']?>" target="_blank">来源<img class="icons" src="/static/icons/ico_link.svg" /></a></dd>
        <?php endforeach;?>
    </dl>
</div>