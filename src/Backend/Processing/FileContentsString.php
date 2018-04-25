<?php
/**
 * App sass compiler
 */

namespace purencool_editor\Backend\Processing;


use FileFetcher\FileFetchingException;
use FileFetcher\SimpleFileFetcher;

/**
 * Undocumented class
 */
class FileContentsString 
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
    * @param string $path
    * @return string
    */
    public function getResponse($path)
    {
        $fetcher = new SimpleFileFetcher();
        return $fetcher->fetchFile($path);
    }
}
