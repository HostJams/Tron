<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 12:17 PM
 */

return array(
    'projectDir'=>'tron3',
    'debug'=>true,
    'configureFor'=>'dev',

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