<?php

namespace purencool_editor\Backend\Controllers;
/**
 * App sass compiler
 */



use \Leafo\ScssPhp\Compiler;


/**
 * Undocumented class
 */
class ApplicationCompilerController
{

    
    /**
     * Undocumented function
     */
    public function __construct($app)
    {
        $this->getACController($app);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getACController($app)
    {
    $app['message']->setMessage('Test Leafo Formatter');
        $scss = new Compiler();
      //  $scss->setImportPaths("../../sass/");
      //  $scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed');
      //  $output = $scss->compile("@import 'styles.scss'");
       // echo $output;
       // file_put_contents("../../css/style.css", $output);
    }
}

