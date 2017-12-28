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




###########################################
#       MODIFICATION BELOW THIS LINE IS
#       DISCOURAGED
##########################################
//return $routes;
//return the routes as an instance of symfony RouteCollections
return $routes->getRouteCollections();