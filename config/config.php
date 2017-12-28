<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 12:17 PM
 */

return array(
    'projectDir'=>'tron3',
    'debug'=>false,
    'configureFor'=>'dev',

    '404msg'=>'We were not able to find the requested path. You may define a custom
        404 page in public/index.php in the ResourceNoFoundException or you can create a 
        EventResponseException listener and register it in the container.php',

    'exceptionsMsg'=>'An unknown exception occured. You may define a custom error handling in the public/index.php
    or create a EventResponseException listener and register it in container.php',

    #DATABASE CONFIGURATION
    'devServer'=>array(
        'host'=>'localhost',
        'username'=>'username',
        'password'=>'password',
        'database'=>'databaseName'
    )

    ,
    'prodServer'=>array(
        'host'=>'localhost',
        'username'=>'username',
        'password'=>'password',
        'database'=>'databaseName'
    ),

    'testServer'=>array(
        'host'=>'localhost',
        'username'=>'username',
        'password'=>'password',
        'database'=>'databaseName'
    )
);