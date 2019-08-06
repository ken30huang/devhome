<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo isset($data['setting'])?$data['setting']['setting_title']:'首页'; ?></title>
  <meta name="description" content="<?php echo isset($data['setting'])?$data['setting']['setting_desc']:''; ?>" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" rel="stylesheet">
  <link href="/webhome/layouts/index/tip7/css/main.css" rel="stylesheet">
  <?php echo isset($data['header'])?$data['header']:'首页'; ?>
</head>

<body id="top">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php echo isset($data['navbar'])?$data['navbar']:''; ?>
    <main class="mdl-layout__content">
      <div class="site-content">
        <div class="container">
           <?php echo isset($data['body'])?$data['body']:'';?>
        </div>
      </div>
      <footer class="mdl-mini-footer">
        <div class="footer-container">
          <div class="mdl-logo">&copy; 2019
            Template from <a href="http://www.cssmoban.com/cssthemes/8842.shtml" title="网页模板" target="_blank">网页模板</a></div>
            <ul class="mdl-mini-footer__link-list">
              <li><a href="https://getmdl.io/index.html" target="_blank">Prower By Material Design Lite</a></li>
            </ul>
        </div>
      </footer>
    </main>
    <script src="https://code.getmdl.io/1.3.0/material.min.js" defer></script>
  </div>
  
</body>

</html>