<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title><?php echo isset($data['setting'])?$data['setting']['setting_title']:'首页'; ?></title>

  <?php echo isset($data['header'])?$data['header']:'首页'; ?>
</head>

<body>

  <div class="main-container mt40">
      <?php echo isset($data['navbar'])?$data['navbar']:''; ?>
      <div class="body mt40">
        <?php echo isset($data['body'])?$data['body']:'';?>
      </div>
  </div>

  <?php echo isset($footer)?$footer:''; ?>
</body>

</html>