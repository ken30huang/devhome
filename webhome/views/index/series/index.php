<div class="container mt-80">
    <div class="row">
        <?php foreach($series_list as $series):?>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <img class="card-img-top" style="height:213px;" src="<?php echo $series['c_thumb']; ?>" alt="Card image cap">
                    <h5 class="card-title"><a href="/series/detail/<?php echo $series['c_id']; ?>"><?php echo $series['c_title'];?></a></h5>
                    <p class="card-text"><?php echo $series['c_summery'];?></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>