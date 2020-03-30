<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML result</title>
    <style>
        * { margin:0; padding:0; }
        <?php if(isset($css)): echo $css; endif; ?>
    </style>
</head>

<body>
    <?php if(isset($html)): echo $html; endif; ?>
</body>

<?php if(isset($js_links)): ?>
<?php foreach($js_links as $jsfile):?>
<script src="<?php echo $jsfile; ?>"></script>
<?php endforeach;?>
<?php endif; ?>

<script type="text/<?php echo $jstype; ?>">
<?php if(isset($js)): echo $js; endif; ?>
</script>

</html>