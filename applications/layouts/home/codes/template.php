<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/static/imgs/favicon.ico" />
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/base.css?v=1.1.2"/>
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/main.css?v=1.1.4"/>

    <script src="/static/js/libs/jquery/jquery.min.js"></script>
    <script src="/static/js/comm.js"></script>

    <title>Code's Home</title>
</head>

<body>
    <!-- http://www.htmleaf.com -->
    <div class="slider">
        <div class="slider_cont">
            <div class="slider_header">
                <img class="slider_avater" src="https://avatars.dicebear.com/v2/gridy/robot.svg" />
            </div>
            <div class="slider_menu">
                <ul>
                    <?php foreach($menu_list as $menu):?>
                    <li class="nav-item <?php if($menu['isactive']==1): echo 'active'; endif; ?>">
                        <a class="nav-link" href="<?php echo $menu['c_alias'];?>"><?php echo $menu['c_title'];?></a>
                    </li>
                    <?php endforeach;?>
                    <?php if(isset($_SESSION['user'])):?>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/maintain/lib">未维护的库</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/maintain/libremark">我关注的库</a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
            <div class="slider_social">
            </div>
        </div>
    </div>
    <div class="cont_wrap">
        <?php echo $main; ?>
    </div>
    <script src="/applications/layouts/<?php echo $ui_path;?>/js/main.js?v=1.0.2"></script>
</body>

</html>