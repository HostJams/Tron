<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 3:37 PM
 */

use Symfony\Component\Routing\Route;
use Tron\Core\RouteCollectionOverride;

$routes = new RouteCollectionOverride();

#############################################
# ADD YOUR APP ROUTES HERE
############################################
$routes->add('index',new Route('/index',array(
    '_controller'=>'Tron\Controller\Home\HomeController::indexAction')));

$routes->add('404',new Route('/404',array(
    '_controller'=>'Tron\Controller\Error\TronError::error404')));

$routes->add('error',new Route('/error',array(
    '_controller'=>'Tron\Controller\Error\TronError::allExceptions')));



###########################################
#       MODIFICATION BELOW THIS LINE IS
#       DISCOURAGED
##########################################
//return $routes;
//return the routes as an instance of symfony RouteCollections
return $routes->getRouteCollections();