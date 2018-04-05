<?php
error_reporting( E_ALL );
$query = isset($_GET['q'])? $_GET['q']:'';
//$query = isset($_POST['q'])? $_POST['q']:'';
require "vendor/autoload.php";

use purencool_editor\Backend\Lib\Config;
use purencool_editor\Backend\Lib\Message;
use purencool_editor\Backend\ObjectCollection;

use purencool_editor\Backend\Controllers\ApplicationCompilerController;


$collectionObj = new ObjectCollection();
$collectionObj->setObject('config', new Config);
$collectionObj->setObject('message', new Message);
$app = $collectionObj->collection;



switch ($query) {

    case 'compile':   
        $aCCObj = new ApplicationCompilerController($app);
        print $aCCObj->getResponse();
        break;  
    case 'read-dir':
        break;
    case 'read-image-dir':
        break;   
        
       

    case 'read-sass-dir':
        break;
    case 'read-sass-file':
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


