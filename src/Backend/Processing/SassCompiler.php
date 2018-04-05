<?php
/**
 * App sass compiler
 */

namespace purencool_editor\Backend\Processing;



use \Leafo\ScssPhp\Compiler;


/**
 * Undocumented class
 */
class SassCompiler
{

    
    /**
     * Undocumented function
     */
    public function __construct($app)
    {
        $this->getSassCompiler($app);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function getSassCompiler($app)
    {
        $app['message']->setMessage('Compile Sass Directories');
        $scss = new Compiler();
       // $scss->setImportPaths("../../sass/");
      //  $scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed');
      //  $output = $scss->compile("@import 'styles.scss'");
      //  file_put_contents("../../css/style.css", $output);
    }
}