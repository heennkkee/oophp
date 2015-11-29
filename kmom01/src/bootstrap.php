<?php
/**
* Bootstrapping functions, essential and needed for permafrost to work together with some common helpers.
*
*/

/**
* Dumps input variable.
*
* @param any variable.
* @return prints input variable.
*/
function dump($toDump) {
    echo "<pre>" . htmlentities(print_r($toDump, 1)) . "</pre>";
}

/**
 * Default exception handler.
 *
 */

function myExceptionHandler($exception) {
  echo "permafrost: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');

/**
* Autoloader for classes.
*
*/

function myAutoloader($class) {
  $path = PERMAFROST_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');
