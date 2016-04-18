<?php 

use Mage2\Router;

$router = new Router();
$router->addRoute('/is_leap_year/{year}', 'Calendar\\Controller\\LeapYearController::indexAction');

return $router;