<?php

/*
 * Load the autoloader provided by Composer. Yay!
 */
require_once("../vendor/autoload.php");

/*
 * Pull ourselves up by our bootstraps
 */
require_once("../YAPF/bootstrap.php");


/*
 * Create the application instance
 */
$app = YAPF\Application::instance();

/*
 * Let's get cookin!
 */
$app->run();