<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/static/imgs/favicon.ico" />
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/base.css?v=1.0.9"/>
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/main.css?v=1.1.3"/>

    <script src="/static/js/libs/jquery/jquery.min.js"></script>
    <title>Code's Home</title>
</head>

<body>
    <!-- http://www.htmleaf.com -->
    <div class="slider">
        <div class="slider_cont">
            <div class="slider_header">Code's Home</div>
            <div class="slider_menu">
                <ul>
                    <?php foreach($menu_list as $menu):?>
                    <li class="nav-item <?php if($menu['isactive']==1): echo 'active'; endif; ?>">
                        <a class="nav-link" href="<?php echo $menu['c_alias'];?>"><?php echo $menu['c_title'];?></a>
                    </li>
                    <?php endforeach;?>
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