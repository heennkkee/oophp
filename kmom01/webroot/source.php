<?php
include('config.php');
$permafrost['title'] = 'Source';
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
$permafrost['content'] = $source->View();
//Render the page
include(PERMAFROST_THEME_PATH);
