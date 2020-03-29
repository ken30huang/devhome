<div class="pager container">
    <div class="row mt-100">
        <div class="md-8 sm-12 col card-btm-20">
            <?php foreach($info_list as $info):?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $info['c_title'];?></h4>
                    <h5 class="card-subtitle">Nice looking subtitle.</h5>
                    <p class="card-text">书或笔记的描述</p>
                    <a class="card-link" href="/home/note/detail/<?php echo $info['c_id'];?>">查看更多</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="md-4 sm-12 col sidebar">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">笔记 & 教程</h4>
                    <div class="row">
                        <ul class="list-btm-20">
                        <?php foreach($dir_list as $dir):?>
                            <li><a href="/home/note/index/<?php echo $dir['c_id'];?>"><?php echo $dir['c_title'];?></a></li>
                        <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>