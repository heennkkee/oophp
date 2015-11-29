<?php
include('config.php');
$permafrost['title'] = 'Index';
$permafrost['content'] = <<<EOD
<h1>Rapporter</h1>
<p>Här finns alla rapporter för den här kursen.</p>
<h2>KMOM01</h2>
<p></p>
<h2>KMOM02</h2>
<p></p>
<h2>KMOM03</h2>
<p></p>
EOD;

//Render the page
include(PERMAFROST_THEME_PATH);
