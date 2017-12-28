<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 4:09 PM
 */

namespace Tron\Core;


class LoadConfig
{
    private $config;
    private $debug;

    public function __construct()
    {
        $this->config = require_once __DIR__ . '/../../config/config.php';
        $this->debug = $this->config['debug'];
    }

    public function getProjectDir()
    {
        return $this->config['projectDir'];
    }

    public function debugEnabled()
    {
        return $this->debug;
    }

    public function get404msg()
    {
        return $this->config['404msg'];
    }

    public function getExceptionMsg()
    {
        return $this->config['exceptionsMsg'];
    }


    public function debug()
    {
        if($this->debug===true)
        {
            ini_set('display_errors', 1);
            error_reporting(-1);
        }
    }
}