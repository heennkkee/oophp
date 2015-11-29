<?php
//"Extraherar" vår array till olika variabler, typ
// $permafrost['title'] blir $title.
extract($permafrost);

include(__DIR__ . '/functions.php');

include(__DIR__ . '/index.tpl.php');
