<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" href="/static/imgs/favicon.ico" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="/applications/layouts/<?php echo $ui_path;?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="/applications/layouts/<?php echo $ui_path;?>/css/style.css?v=1.0.1" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
	<link href="/applications/layouts/<?php echo $ui_path;?>/css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!-- online-fonts -->
	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	<!-- //online-fonts -->
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
	</div>

</body>

</html>