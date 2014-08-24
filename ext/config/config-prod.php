<?php

// Local
$app['locale'] = 'en';
$app['session.default_locale'] = $app['locale'];
$app['translator.messages'] = array(
    'fr' => __DIR__.'/../resources/locales/en.yml',
);

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'dbname'   => 'silox',
    'user'     => 'malcolm',
    'password' => 'pass',
);

$app['log.level'] = Monolog\Logger::ERROR;

$app['api.version'] = "v1";
$app['api.endpoint'] = "";