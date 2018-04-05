<?php

namespace purencool_editor\Backend\Controllers;
/**
 * App sass compiler
 */
include_once '../classes.php';



use Leafo\ScssPhp\Compiler;
use purencool_editor\Backend\Lib\Config;

/**
 * Undocumented class
 */
class ApplicationCompilerController
{

    
    /**
     * Undocumented function
     */
    public function __construct($configObj)
    {
        $this->getACController($configObj);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getACController($configObj)
    {
        print_r($configObj); exit;
        
        $scss = new Compiler();
        $scss->setImportPaths("../../sass/");
        $scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed');
        $output = $scss->compile("@import 'styles.scss'");
       // echo $output;
        file_put_contents("../../css/style.css", $output);
    }
}

new ApplicationCompilerController(new Config);