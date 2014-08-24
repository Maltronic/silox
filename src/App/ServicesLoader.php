<?php

namespace App;

use Silex\Application;

class ServicesLoader
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function bindServicesIntoContainer()
    {
        $this->app['silos.service'] = $this->app->share(function () {
            return new Services\SiloNameService($this->app["db"]);
        });
    }
}