<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$env = (isset($_SERVER['APP_ENV'])) ? $_SERVER['APP_ENV'] : 'prod';

defined('YII_DEBUG') or define('YII_DEBUG', ($env == 'dev'));
defined('YII_ENV') or define('YII_ENV', $env);

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../protected/config/web.php');

(new yii\web\Application($config))->run();