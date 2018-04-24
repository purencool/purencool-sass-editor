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
class LiveStyleSheetView 
{

    protected $app;
    
    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $response;


    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $directory;
    
    /**
     * Undocumented function
     */
    public function __construct($app, $directory = null)
    {
        $this->app = $app;
        $this->directory = $directory;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function fileFinder($fileType)
    {

       
        $directory = $this->app['config']->getCssDirectory();
        $fileName = $this->app['config']->getUnCompressedCssFile();
        $fetcher = new SimpleFileFetcher();
        return 	$fetcher->fetchFile($directory.'/'.$fileName);
    }

    public function getResponse($fileType = null)
    {
      
        return  $this->fileFinder($fileType);
    }
}
