<!-- <div class="banner-text-w3ls" id="knowledge">
    <div class="container">
        <div class="mx-auto text-center">
            <h3>搜索库</h3>
            <div class="row contact_top">
                <div class="col-sm-12">
                    <input type="text" name="Name" placeholder="Name" required="">
                </div>
            </div>
            <a class="btn btn-primary mt-lg-5 mt-3 agile-link-bnr" href="#about" role="button">知识来源</a>
        </div>
    </div>
</div> -->
<!-- news -->
<div class="news" id="news">
    <h3 class="w3_head mb-4 text-left"> 开发日志</h3>
    <?php foreach($articles as $aitem): ?>
    <div class="row news-grids-left mt-5">
        <div class="col-lg-12">
            <?php if($aitem['c_link']): ?>
            <h5><a href="<?php echo $aitem['c_link'] ?>" target="_blank"><?php echo $aitem['c_title'] ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></h5>
            <?php else:?>
            <h5><a href="/home/blog/detail/<?php echo $aitem['c_alias'] ?>"><?php echo $aitem['c_title'] ?></a></h5>
            <?php endif; ?>
            <p class="mt-3"><?php echo $aitem['c_summery']; ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<!-- //news -->
<!-- about --
<section class="slide-wrapper" id="about">
    <h2 class="w3_head mb-4">About Me </h2>
    <h4 class="main_hd"> Fermentum lobortis non tristique ante proin sociis <br>accumsan lobortis auctor etiam.
    </h4>
    <p class="iner mt-md-5"> Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis
        aliquam mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis
        accumsan lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl
        fermentum consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo
        mi augue interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper
        lacinia natoque aenean scelerisque.</p>
</section>
-- //about -->
<!-- services --
<section class="services" id="services">
    <div class="container">
        <h3 class="w3_head mb-4 text-left"> Services</h3>
        <p class="iner mt-md-5 text-left"> Nunc fermentum adipiscing tempor cursus nascetur adipiscing
            adipiscing. Primis aliquam mus lacinia lobortis.Nunc fermentum adipiscing tempor cursus nascetur
            adipiscing adipiscing. </p>
        <ul class="list-unstyled mt-5">
            <li>
                <div class="row">
                    <div class="col-2 ic-lft">
                        <span class="fa fa-code"></span>
                    </div>
                    <div class="col-10">
                        <h6>Fermentum adipiscing </h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="col-2 ic-lft">
                        <span class="fa fa-cubes"></span>
                    </div>
                    <div class="col-10">
                        <h6>Fermentum lobortis </h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="col-2 ic-lft">
                        <span class="fa fa-book"></span>
                    </div>
                    <div class="col-10">
                        <h6>Tristique ante </h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="col-2 ic-lft">
                        <span class="fa fa-coffee"></span>
                    </div>
                    <div class="col-10">
                        <h6>Nascetur adipiscing</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="col-2 ic-lft">
                        <span class="fa fa-bolt"></span>
                    </div>
                    <div class="col-10">
                        <h6>Primis aliquam mus</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="row">
                    <div class="col-2 ic-lft">
                        <span class="fa fa-cog"></span>
                    </div>
                    <div class="col-10">
                        <h6>Lobortis phasellus</h6>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
!-- //services -->