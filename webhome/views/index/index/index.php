<div class="container mt-80">
    <div class="search-form">
        <p class="lead">搜索想关的文章链接、博客、代码、开源书籍（收录）</p>
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
                    <h5 class="card-title">社区&博客技术系列文章</h5>
                    <div class="card-text">
                        <ul class="series_list">
                            <?php foreach($series_list as $series): ?>
                            <li><?php echo $series['c_title']; ?><a href="<?php echo $series['c_link']?>" target="_blank"><img class="icons" src="<?php echo __STATIC__.'/icons/ico_link.svg'?>" /></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <a href="/series" class="btn btn-primary">更多系列文章</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-20">
    <h4>Demo展示</h4>
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-text card-text-h100">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">查看效果</a>
                    <a href="#" class="card-link">查看代码</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-text card-text-h100">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">查看效果</a>
                    <a href="#" class="card-link">查看代码</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-text card-text-h100">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">查看效果</a>
                    <a href="#" class="card-link">查看代码</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-text card-text-h100">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">查看效果</a>
                    <a href="#" class="card-link">查看代码</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-20">
    <h4>知识点</h4>
    <dl class="row">
        <dt class="col-sm-3">Description lists</dt>
        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
        <dt class="col-sm-3">Euismod</dt>
        <dd class="col-sm-9">
            <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
            <p>Donec id elit non mi porta gravida at eget metus.</p>
        </dd>
    
        <dt class="col-sm-3">Malesuada porta</dt>
        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
    
        <dt class="col-sm-3">Truncated term is truncated</dt>
        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
            justo sit amet risus.</dd>
    
        <dt class="col-sm-3">Nesting</dt>
        <dd class="col-sm-9">
            Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.
        </dd>
    </dl>
</div>