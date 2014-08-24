<?php

namespace App;

use Silex\Application;

class RoutesLoader
{
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->instantiateControllers();

    }

    private function instantiateControllers()
    {
        $this->app['silos.controller'] = $this->app->share(function () {
            return new Controllers\SiloNameController($this->app['silos.service']);
        });
    }

    public function bindRoutesToControllers()
    {
        $api = $this->app["controllers_factory"];

        $api->get('/siloname', "silos.controller:getAll");
        $api->post('/siloname', "silos.controller:save");
        $api->put('/siloname/{id}', "silos.controller:update");
        $api->delete('/siloname/{id}', "silos.controller:delete");

        $this->app->mount($this->app["api.endpoint"].'/'.$this->app["api.version"], $api);
    }
}