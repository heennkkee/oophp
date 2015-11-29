<!doctype html>
<html lang="<?=$lang?>">
<head>
<meta charset="utf-8"/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel="shortcut icon" href="<?=$favicon?>"/><?php endif; ?>
<?php foreach($stylesheets as $stylesheet): ?>
<link rel='stylesheet' type='text/css' href='<?=$stylesheet?>'>
<?php endforeach; ?>
<?php foreach($fonts as $font): ?>
    <link href='<?=$font?>' rel='stylesheet' type='text/css'>
<?php endforeach; ?>
</head>
<body>
  <div class="wrapper">
    <div class="header"><?=$header?></div>
    <div class="menu"><?=$menu?></div>
    <div class="content"><?=$content?></div>
    <div class="footer"><?=$footer?></div>
  </div>
</body>
</html>
