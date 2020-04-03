<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>文档总览</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="/static/imgs/favicon.ico" />
        <link rel="stylesheet" href="<?php echo THEME_URL;?>vue.css">
    </head>
    <body>
    <div id="app">Please wait...</div>
    <script>
        window.$docsify = {
            <?php
            foreach($setting_data as $setting) {
                if($setting['ds_type'] == 'String') {
                    echo $setting['ds_key'].":'".$setting['ds_value']."',";
                } else {
                    echo $setting['ds_key'].":".$setting['ds_value'];
                }
            }
            ?>
        }
    </script>
    <script src="<?php echo THEME_URL;?>docsify.min.js"></script>
    </body>
</html>