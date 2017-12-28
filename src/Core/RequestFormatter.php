<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 10:12 PM
 */

namespace Tron\Core;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class RequestFormatter
{
    private $request;
    private $sc;
    private $path;
    private $config;

    public function __construct(Request $request, ContainerBuilder $sc, LoadConfig $config)
    {
        $this->request = $request;
        $this->sc = $sc;
        $this->config = $config;
    }

    public function stripDotPHP()
    {
        $this->path = $this->request->getPathInfo();
        $projectDir = $this->config->getProjectDir();
        $this->path = str_replace(".php","",$this->path);


        //if path is empty then assign the default
        if($this->path==="/" || $this->path==="" || $this->path==="/".$projectDir."/")
        {
            $this->path = "/".$projectDir."/index";
        }


        return $this;
    }

    public function stripLastSlash()
    {
        if(substr_count($this->request,"/") > 1)
        {
            $this->path = rtrim($this->path,"/");
        }

        return $this;
    }

    public function getFormattedRequest()
    {
        $matcher = $this->sc->get('matcher');
        $this->request->attributes->add($matcher->match($this->path));
        return $this->request;
    }
}