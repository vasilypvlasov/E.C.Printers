<?php
$config = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=printers',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
];
if (defined('YII_DEBUG')) {
    $config['password'] = 'root';
}

return $config;
