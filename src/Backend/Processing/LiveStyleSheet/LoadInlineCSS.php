<?php
/**
 * App sass compiler
 */

namespace purencool_editor\Backend\Processing\LiveStyleSheet;


use FileFetcher\FileFetchingException;
use FileFetcher\SimpleFileFetcher;

/**
 * Undocumented class
 */
class LoadInlineCSS 
{
    
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $app;
    


    /**
     * Undocumented array
     *
     * @var string
     */
    protected $response = '';


    
    /**
     * Undocumented function
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

   



    /**
     * Undocumented function
     *
     * @return string
     */
    public function getResponse()
    {
        
        $directory = $this->app['config']->getCssDirectory();
        $fileName = $this->app['config']->getUnCompressedCssFile();
        $fetcher = new SimpleFileFetcher();
        return $fetcher->fetchFile($directory.'/'.$fileName);
    }
}
