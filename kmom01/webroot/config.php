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
$permafrost['fonts'][] = 'https://fonts.googleapis.com/css?family=Open+Sans';
$permafrost['fonts'][] = 'https://fonts.googleapis.com/css?family=Montserrat';
//POÄNGTERA I RAPPORT
$permafrost['header'] = <<<EOD
<img class="headerPic" src="img/snowflake.png" width=75 height=67 alt="En snöflinga.">
<div class="sloganContainer">
    <span class="siteTitle slogan">Permafrost webbtemplate</span>
    <span class="siteSlogan slogan">Frost året om</span>
</div>
EOD;
$permafrost['footer'] = <<<EOD
<div class="tableRow">
    <div class="tableCell"><span class="siteFooter">En footer #HenrikAronsson</span></div>
    <div class="tableCell"><a href="https://www.facebook.com/haronsson1"><img src="img/fblogo.png" alt="Henrik på Facebook"></a></div>
</div>
<div class="tableRow">
    <div class="tableCell"><a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn validering</a></div>
    <div class="tableCell"><a href="https://www.github.com/heennkkee"><img src="img/githublogo.png" alt="Henrik på Github"></a></div>
</div>
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
