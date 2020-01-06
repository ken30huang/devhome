<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" href="/static/imgs/favicon.ico" />
	<!-- Custom Theme files -->
	<link href="/applications/layouts/<?php echo $ui_path;?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="/applications/layouts/<?php echo $ui_path;?>/css/style.css?v=1.0.3" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
	<link href="/applications/layouts/<?php echo $ui_path;?>/css/fontawesome-all.min.css" rel="stylesheet" />
	<!-- //Custom Theme files -->
	<script src="/static/js/libs/jquery/jquery.min.js"></script>
</head>

<body>
	<div class="sidenav text-center">
		<div class="side_top">
			<img src="/applications/layouts/<?php echo $ui_path;?>/images/about.jpg" alt="news image" class="img-fluid navimg">
			<h1 class="top_hd mt-2"><a href="/home">Code's Home</a></h1>
		</div>
		<!-- header -->
		<header>
			<div class="nav-top">
				<nav class="mnu mx-auto">
					<label for="drop" class="toggle">导航</label>
					<input type="checkbox" id="drop">
					<ul class="menu">
                        <?php foreach($menu_list as $menu):?>
                        <li class="nav-item <?php if($menu['isactive']==1): echo 'active'; endif; ?>">
                            <a class="nav-link" href="<?php echo $menu['c_alias'];?>"><?php echo $menu['c_title'];?></a>
                        </li>
                        <?php endforeach;?>
					</ul>
				</nav>
			</div>
		</header>
		<!-- //header -->
	</div>
	<div class="main">
		<?php echo $main; ?>
		<div class="cpy-right text-center">
			<p>Copyright &copy; 2020 Collect from
			<a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
		</div>
	</div>
</body>

</html>