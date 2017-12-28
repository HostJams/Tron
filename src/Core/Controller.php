<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 10:45 PM
 */

namespace Tron\Core;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Twig_Loader_Array;
use Twig_Environment;

class Controller
{
    public function render_template(Request $request, array $context = array() )
    {
        extract($request->attributes->all(), EXTR_SKIP);
        ob_start();
        $template = sprintf(__DIR__.'/../../src/View/%s.php', $_route);

        //check if the template exist

        if(!file_exists($template))
        {
            throw new FileException(" No template exist at ".$template);
        }


        $template = file_get_contents($template);

        $loader = new Twig_Loader_Array(array(
            $_route => $template,
        ));
        $twig = new Twig_Environment($loader);

        $twig->addFunction(new \Twig_SimpleFunction('asset', function ($asset) {
            // implement whatever logic you need to determine the asset path

            return sprintf('assets/%s', ltrim($asset, '/'));
        }));

        echo $twig->render($_route, $context);

        return new Response(ob_get_clean());
    }
}