<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="shortcut icon" href="/static/imgs/favicon.ico" />
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/paper.min.css" />
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/applications/layouts/<?php echo $ui_path;?>/css/common.css?v=1.0.2" />
    <script src="/static/js/libs/jquery/jquery.min.js"></script>
    <script src="/static/js/comm.js"></script>
</head>

<body>
    <nav class="border fixed split-nav">
        <div class="nav-brand">
            <h3><a href="/">首页</a></h3>
        </div>
        <div class="collapsible">
            <input id="collapsible1" type="checkbox" name="collapsible1">
            <button>
                <label for="collapsible1">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </label>
            </button>
            <div class="collapsible-body">
                <ul class="inline">
                    <li><a href="/doc/#/html5css3/">笔记&教程</a></li>
                    <li><a href="/home/flab">实验区</a></li>
                    <li><a href="/home/frontlib">第三方库集合</a></li>
                    <li><a href="/home/index/about">关于</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php echo $main; ?>

    <footer class="text-center">
        <p>
            Template by <a href="https://www.getpapercss.com/" target="_blank">PaperCSS</a>
        </p>
    </footer>
</body>

</html>