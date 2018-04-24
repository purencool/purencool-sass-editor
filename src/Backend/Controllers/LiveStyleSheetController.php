<?php

namespace purencool_editor\Backend\Controllers;

/**
 * App sass compiler
 */
use purencool_editor\Backend\Processing\LiveStyleSheet;

/**
 * Undocumented class
 */
class LiveStyleSheetController 
{

   /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $app;
    
    /**
     * Undocumented function
     *
     * @param [type] $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function response()
    {
        $obj = new LiveStyleSheet($this->app);
        return $obj->getResponse();
    }
}


