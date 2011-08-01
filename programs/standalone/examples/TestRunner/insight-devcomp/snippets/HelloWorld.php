<?php

define('INSIGHT_CONFIG_PATH', dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'package.json');
require_once('FirePHP/Init.php');

$console = FirePHP::to('page')->console();
$console->label('The Label')->log('Hello World');
$console->label('A Variable')->log($_GET);