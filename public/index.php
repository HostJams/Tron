<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 1:03 PM
 */


//new
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Tron\Core\RequestFormatter;


try {
    $sc = require_once __DIR__ . '/../src/container.php';
    $sc->setParameter('routes', require_once __DIR__ . '/../src/app.php');

    $config = $routes->getConfig();
    $request = Request::createFromGlobals();
    $format = new RequestFormatter($request, $sc,$config);

    $request = $format->stripDotPHP()->stripLastSlash()->getFormattedRequest();
    $response = $sc->get('framework')->handle($request);

    $response->send();
}

//404
catch(\Symfony\Component\Routing\Exception\ResourceNotFoundException $e)
{
    if($config->debugEnabled())
    {
        echo "You are seeing this message because you have debug enabled";
        echo "<br/>";
        echo "<pre>".print_r($e,true)."</pre>";
    }

    else
    {
        header('Location:404');
        exit;
    }
}
catch(Exception $e)
{
    if($config->debugEnabled())
    {
        echo "You are seeing this message because you have debug enabled";
        echo "<br/>";
        echo "<pre>".print_r($e,true)."</pre>";
    }
    else
    {
        header("Location:error");
        exit;
    }
}


