<?php


namespace purencool_editor\Backend\Controllers;

use purencool_editor\Backend\Processing\FileContentsString;

/**
 * Undocumented class
 */
class FileContentsController
{

     /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $app;

    /**
      * Undocumented variable
      *
      * @var string
      */
    protected $path;

    
    /**
     * Undocumented function
     *
     * @param [type] $app
     */
    public function __construct($app, $path = '')
    {
        $this->app = $app;
        $this->path = $path;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function response()
    {
        if ($this->path == '') {
            return "No path was submitted";
        }
        
        $obj = new FileContentsString($this->app);
       
        return $obj->getResponse($this->path);
    }
}
