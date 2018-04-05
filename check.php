<?php
error_reporting( E_ALL );
define("ROOT_DIRECTORY", __DIR__);
require "vendor/autoload.php";
use purencool_editor\Backend\Lib\Config;
use purencool_editor\Backend\Lib\Message;
use purencool_editor\Backend\ObjectCollection;

use purencool_editor\Backend\Controllers\ApplicationCompilerController;
use purencool_editor\Backend\Controllers\FileFinderController;


$collectionObj = new ObjectCollection();
$collectionObj->setObject('config', new Config);
$collectionObj->setObject('message', new Message);



$app = $collectionObj->collection;
//$obj = new ApplicationCompilerController($app); //--Tested
$obj = new  FileFinderController($app);  //--Tested


$app['message']->setMessage($obj->response());
print $app['message']->getMessages();