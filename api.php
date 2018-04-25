<?php
header('Access-Control-Allow-Origin: *');
error_reporting( E_ALL );
define("ROOT_DIRECTORY", __DIR__);

$query = isset($_GET['q'])? $_GET['q']:'';
$request = isset($_GET['r'])? $_GET['r']:'';
//$query = isset($_POST['q'])? $_POST['q']:'';
require "vendor/autoload.php";

use purencool_editor\Backend\Lib\Config;
use purencool_editor\Backend\Lib\Message;
use purencool_editor\Backend\ObjectCollection;


use purencool_editor\Backend\Controllers\FileFinderController;
use purencool_editor\Backend\Controllers\FileContentsController; 
use purencool_editor\Backend\Controllers\LiveStyleSheetController;
use purencool_editor\Backend\Controllers\ApplicationCompilerController;


$collectionObj = new ObjectCollection();
$collectionObj->setObject('config', new Config);
$collectionObj->setObject('message', new Message);
$app = $collectionObj->collection;



switch ($query) {

    case 'compile':   
        $aCCObj = new ApplicationCompilerController($app);
        print $aCCObj->response();
        break;  
    case 'read-dir':
        break;
    case 'read-image-dir':
        break;   
    case 'live-style-guide':
        $lSSCObj = new LiveStyleSheetController($app);
        print $lSSCObj->response();
        break;    
       

    case 'read-sass-dir':
        $objRSD = new  FileFinderController($app); 
        print $objRSD->response();
        break;
    case 'read-sass-file':
    // /home/john/Html/purencool/purencool_editor/src/sass/components/_html.scss
        $fCCObj = new FileContentsController($app,$request); 
        print $fCCObj->response();
        break; 
    case 'create-sass-file':
        break; 
    case 'save-sass-file':
        break;   



    case 'read-css-dir':
        break;    
    case 'read-css-file':
        break;   
    case 'create-css-file':
        break; 
    case 'save-css-file':
        break;  
    


    case 'read-template-dir':
        break;    
    case 'read-template-file':
        break;   
    case 'create-template-file':
        break; 
    case 'save-template-file':
        break;      
        

    default:
        print "no query";
        break;
}


