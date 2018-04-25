<?php
error_reporting( E_ALL );
define("ROOT_DIRECTORY", __DIR__);
require "vendor/autoload.php";
use purencool_editor\Backend\Lib\Config;
use purencool_editor\Backend\Lib\Message;
use purencool_editor\Backend\ObjectCollection;

use purencool_editor\Backend\Controllers\ApplicationCompilerController;
use purencool_editor\Backend\Controllers\FileFinderController;
use purencool_editor\Backend\Controllers\LiveStyleSheetController;
use purencool_editor\Backend\Controllers\FileContentsController; 


$collectionObj = new ObjectCollection();
$collectionObj->setObject('config', new Config);
$collectionObj->setObject('message', new Message);



$app = $collectionObj->collection;
//$obj = new ApplicationCompilerController($app); //--Tested
//$obj = new  FileFinderController($app);  //--Tested
//$obj = new LiveStyleSheetController($app); //-- Tested
$obj = new FileContentsController($app,'/home/john/Html/purencool/purencool_editor/src/sass/components/_html.scss'); //-- Untested


$app['message']->setMessage($obj->response());
print $app['message']->getMessages();