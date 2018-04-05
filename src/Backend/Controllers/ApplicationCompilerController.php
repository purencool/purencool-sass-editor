<?php

namespace Purencool\Backend\Controllers;
/**
 * App sass compiler
 */
include_once  "../../vendor/leafo/scssphp/scss.inc.php";



use Leafo\ScssPhp\Compiler;

/**
 * Undocumented class
 */
class ApplicationCompilerController
{
    /**
     * Undocumented function
     */
    public function __construct()
    {
        $this->getACController();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getACController()
    {
        $scss = new Compiler();
        $scss->setImportPaths("../sass/");
        $scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed');
        $output = $scss->compile("@import 'styles.scss'");
       // echo $output;
        file_put_contents("../css/style.css", $output);
    }
}

new ApplicationCompilerController();