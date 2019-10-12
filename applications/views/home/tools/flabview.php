<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php foreach($pageData['cssLinks'] as $css):?>
    <link rel="stylesheet" href="<?php echo $css;?>" />
    <?php endforeach;?>
    <style>
    <?php echo (isset($pageData['css'])?$pageData['css']:''); ?>
    </style>
</head>
<body>
    <?php echo (isset($pageData['html'])?$pageData['html']:''); ?>
    <script type="text/<?php echo $pageData['jstype']; ?>">
    <?php echo (isset($pageData['js'])?$pageData['js']:''); ?>
    </script>
</body>
</html>