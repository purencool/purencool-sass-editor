<?php

namespace purencool_editor\Backend\Controllers;

/**
 * App sass compiler
 */
use purencool_editor\Backend\Processing\SassCompiler;

/**
 *  Application compiler controller
 */
class ApplicationCompilerController
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
       // $this->response();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function response()
    {
        $obj = new SassCompiler($this->app);
        return $obj->getResponse();
    }
}
