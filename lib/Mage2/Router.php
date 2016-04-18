<?php

namespace Mage2;

use Symfony\Component\Routing;


class Router extends Routing\RouteCollection  {

    public function addRoute($uri, $action) {

        $this->add('leap_year', new Routing\Route(
                $uri,array('year' => null, '_controller' => $action))
        );

        return $this;
    }

}