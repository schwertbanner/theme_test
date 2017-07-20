<?php

namespace theme_test\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class theme_testRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {

    }
}
public function register()
{
    $this->getApplication()->register(theme_testRouteServiceProvider::class);

}
