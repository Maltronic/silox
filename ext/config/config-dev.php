<?php
require __DIR__ . '/config-prod.php';
// debug
$app['debug'] = true;
$app['log.level'] = Monolog\Logger::DEBUG;