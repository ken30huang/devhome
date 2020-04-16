<div class="pager container">
    <div class="row mt-100">
        <div class="md-8 sm-12 col card-btm-20">
            <?php foreach($all_list as $all):?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $all['c_title'];?></h4>
                    <h5 class="card-subtitle">标签：
                        <?php foreach($all['c_tags'] as $titem):?>
                        <a href="/home/blog?tag=<?php echo urlencode($titem);?>"><?php echo $titem; ?></a>
                        <?php endforeach;?>
                    </h5>
                    <p class="card-text"><?php echo $all['c_summery']; ?></p>
                    <?php if($all['c_link']): ?>
                    <a href="<?php echo $all['c_link'] ?>" target="_blank" class="card-link">查看 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                    <?php else:?>
                    <a href="/home/blog/detail/<?php echo $all['c_alias'] ?>" class="card-link">详情</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="md-4 sm-12 col sidebar">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">标签</h4>
                    <div class="row">
                        <?php foreach($all_tags as $titem):?>
                        <a href="/home/blog?tag=<?php echo urlencode($titem['tag_name']);?>"><?php echo $titem['tag_name']; ?></a>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>