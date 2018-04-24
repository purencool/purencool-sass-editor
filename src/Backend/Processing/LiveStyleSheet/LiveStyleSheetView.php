<?php
/**
 * App sass compiler
 */

namespace purencool_editor\Backend\Processing\LiveStyleSheet;



use purencool_editor\Backend\Processing\LiveStyleSheet\RegexString; 

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
    }

 
    public function getResponse()
    {
       $obj = new RegexString($this->app);
        return  $obj->getResponse();
    }
}
