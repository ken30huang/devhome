<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>代码直通车</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/static/plugins/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/main.css?v=1.0.9"/>
    <script src="/static/js/libs/jquery/jquery.min.js"></script>
    <script src="/static/plugins/bootstrap4/js/bootstrap.min.js"></script>
    <script src="/static/js/comm.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <?php foreach($menu_list as $menu):?>
                    <li class="nav-item <?php if($menu['isactive']==1): echo 'active'; endif; ?>">
                        <a class="nav-link" href="<?php echo $menu['c_alias'];?>"><?php echo $menu['c_title'];?></a>
                    </li>
                  <?php endforeach;?>
                </ul>
            </div>
        </div>
    </nav>
    <?php echo $main; ?>
</body>

</html>