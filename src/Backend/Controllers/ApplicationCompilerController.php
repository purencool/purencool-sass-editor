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
    public function __construct($app)
    {
       $this->response($app);
    }

    public function response($app){
        $obj = new SassCompiler($app);
        return $obj->getResponse();
    }
}