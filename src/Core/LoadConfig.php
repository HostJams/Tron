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

    public function __construct()
    {
        $this->config = require_once __DIR__ . '/../../config/config.php';
    }

    public function getProjectDir()
    {
        return $this->config['projectDir'];
    }

    public function debug()
    {
        if($this->config['debug']===true)
        {
            ini_set('display_errors', 1);
            error_reporting(-1);
        }
    }
}