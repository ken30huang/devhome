<?php incFile(__DIR__.DS.'theme.inc.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>后台管理</title>

	<link href="/static/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/static/plugins/bootstrap/css/datepicker3.css" rel="stylesheet">
    <link href="/static/plugins/bootstrap/css/styles.css?v=1.0.1" rel="stylesheet">
    
	<?php if(isset($csslinks)):?>
    <?php foreach($csslinks as $linkhref):?>
    	<?php echo $linkhref; ?>
    <?php endforeach;?>
	<?php endif;?>

	<script src="/static/js/libs/jquery/jquery.min.js"></script>
	<script src="/static/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/static/js/comm.js?v=1.0.0"></script>
</head>

<body>
	<?php echo $nav;?>

	<?php echo $slider; ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<?php echo $main;?>
	</div>
	<!--/.main-->

	<?php if(isset($jslinks)):?>
	<?php foreach($jslinks as $jsscript):?>
    	<?php echo $jsscript; ?>
    <?php endforeach;?>
	<?php endif;?>
	
	<?php echo $footer; ?>
</body>

</html>