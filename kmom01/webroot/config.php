<?php
/**
* Error handling
*/
error_reporting(-1);  // Display all typx of errors
ini_set('display_errors', 1);  //Display all errors
ini_set('output_buffer', 0); // DIsplay errors immediatelly, do not buffer trader_cdlhikkakemod

/**
* permafrost paths.
*/
define('PERMAFROST_INSTALL_PATH', __DIR__ . '/..');
define('PERMAFROST_THEME_PATH', PERMAFROST_INSTALL_PATH . '/theme/render.php');


/**
* Include bootstrapping functions
*/
include(PERMAFROST_INSTALL_PATH . '/src/bootstrap.php');


/**
* Sessions
*/


/**
* Create permafrost variable
*/
$permafrost = array();


/**
* Site wide settings
*/
$permafrost['stylesheets'] = array(
    'css/style.css',
    'css/source.css'
);
$permafrost['lang'] = 'sv';
$permafrost['title_append'] = ' - Kallt och svalt';
$permafrost['fonts'] = 'https://fonts.googleapis.com/css?family=Open+Sans|Montserrat';

//POÄNGTERA I RAPPORT
$permafrost['header'] = <<<EOD
<img class="headerPic" src="img/snowflake.png" width=75 height=67 alt="En snöflinga."></img>
<div class="sloganContainer">
    <span class="siteTitle slogan">Permafrost webbtemplate</span>
    <span class="siteSlogan slogan">Frost året om</span>
</div>
EOD;
$permafrost['footer'] = <<<EOD
<span class="siteFooter">En footer #HenrikAronsson</span>
EOD;

$permafrost['menu'] = '<nav class="navigation"><ul>';

$permafrost['sites'] = array(
    'hello.php' => 'Start',
    'reports.php' => 'Rapporter',
    'source.php' => 'Källa'
);

$selected = explode('/', $_SERVER['SCRIPT_FILENAME'])[count(explode('/', $_SERVER['SCRIPT_FILENAME']))-1];

foreach($permafrost['sites'] as $site => $display) {
    $permafrost['menu'] = $permafrost['menu'].('<li><a'.(($selected == $site) ? ' class="selected"' : '').' href="'.$site.'">'.$display.'</a></li>');
}
$permafrost['menu'] = $permafrost['menu'].'</ul></nav>';
?>
