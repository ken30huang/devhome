<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php foreach($pageData['cssLinks'] as $css):?>
    <link rel="stylesheet" href="<?php echo $css;?>" />
    <?php endforeach;?>
    <?php if($pageData['csstype'] == 'less'): ?>
    <style type="text/less">
    <?php else: ?>
    <style type="text/css">
    <?php endif; ?>
    <?php echo (isset($pageData['css'])?$pageData['css']:''); ?>
    </style>
</head>
<body>
    <?php echo (isset($pageData['html'])?$pageData['html']:''); ?>
    <?php if($pageData['jstype'] == 'babel'):?>
    <script src="<?php echo $pageData['http'];?>//unpkg.com/react@16/umd/react.development.js"></script>
    <script src="<?php echo $pageData['http'];?>//unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="<?php echo $pageData['http'];?>//unpkg.com/@babel/standalone/babel.min.js"></script>
    <?php endif;?>
    <?php if($pageData['jstype'] == 'vue'): $pageData['jstype'] = 'javascript';?>
    <script src="<?php echo $pageData['http'];?>//cdn.jsdelivr.net/npm/vue"></script>
    <?php endif;?>
    <script type="text/<?php echo $pageData['jstype']; ?>">
    <?php echo (isset($pageData['js'])?$pageData['js']:''); ?>
    </script>
</body>
</html>