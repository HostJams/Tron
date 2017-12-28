<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 3:57 PM
 */

namespace Tron\Core;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;


class RouteCollectionOverride
{
    private $routes;
    private $config;
    public function __construct()
    {
        $this->routes = new RouteCollection();
        $this->config = new LoadConfig();
    }

   public function add(String $name, Route $route, array $anotherEntryPoint = array())
   {
       $path = $this->config->getProjectDir().$route->getPath();
       $route->setPath($path);

       $this->routes->add($name,$route);

      //do we have another path that points to the same page?
       /*foreach($anotherEntryPoint as $point)
       {
           $path = $this->config->getProjectDir().$point;
           $route->setPath($path);
           $this->routes->add($name,$route);
       }*/

      return $this;
   }



   public function getRouteCollections()
   {
       return $this->routes;
   }

   public function getConfig()
   {
       return $this->config;
   }
}