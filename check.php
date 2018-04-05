<?php
error_reporting( E_ALL );
require "vendor/autoload.php";

use purencool_editor\Backend\Lib\Config;
use purencool_editor\Backend\Lib\Message;
use purencool_editor\Backend\ObjectCollection;

use purencool_editor\Backend\Controllers\ApplicationCompilerController;


$collectionObj = new ObjectCollection();
$collectionObj->setObject('config', new Config);
$collectionObj->setObject('message', new Message);



$app = $collectionObj->collection;
new ApplicationCompilerController($app);

print $app['message']->getMessages();