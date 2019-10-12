<div class="container mt-80">
    <div class="card-columns">
        <?php foreach($rows as $row):?>
        <div class="card">
            <?php if(!empty($row['c_thumb'])):?>
            <img class="card-img-top" src="<?php echo $row['c_thumb']?>" alt="Card image cap" />
            <?php endif;?>
            <div class="card-body">
                <?php if($row['c_type']=='article'):?>
                <h5 class="card-title"><a href="/home/blog/detail/<?php echo $row['c_alias']?>"><?php echo $row['c_title']?></a></h5>
                <p class="card-text"><?php echo $row['c_summery']?></p>
                <?php endif;?>
                <?php if($row['c_type']=='series'):?>
                <h5 class="card-title"><a href="/home/series/detail/<?php echo $row['c_parentid'];?>?c_id=<?php echo $row['c_id']?>"><?php echo $row['c_title']?></a></h5>
                <p class="card-text">发布于<a href="/home/series/detail/<?php echo $row['c_parentid'];?> "><?php echo $pseries[$row['c_parentid']]; ?></a>系列</p>
                <?php endif;?>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    
    <div class="row mt-20"><?php echo $pager;?></div>
    
</div>