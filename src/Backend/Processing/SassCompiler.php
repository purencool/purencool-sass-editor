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
        $sassDir =  $app['config']->getSassDirectory(); 
        $cssDir =  $app['config']->getCssDirectory(); 
        $defaultScssFile = "@import '". $app['config']->getDefaultSassFile()."'";
        $defaultCssFile = $app['config']->getDefaultCssFile();

        $scss = new Compiler($dir);
        $scss->setImportPaths($sassDir);
        $scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed');
        $outPut = $scss->compile($defaultScssFile);
        $app['message']->setMessage("<pre>$outPut</pre>");
        file_put_contents($cssDir.'/'.$defaultCssFile, $outPut);
       
    }
}