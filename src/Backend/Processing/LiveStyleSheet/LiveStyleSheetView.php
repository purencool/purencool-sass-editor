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

 
    protected function getCSS(){

    }

    protected function regexString(){
        $obj = new RegexString($this->app);
        return $obj->getResponse();
    }

    protected function buildHtml(){
        
    }

    /**
     * Undocumented function
     *
     * @param string $type
     * @return void
     */
    public function getResponse($type = 'html1')
    {
      
       if($type == 'html'){
           return '';
       }
        return  '<pre>'.print_r($this->regexString(),true).'</pre>';
    }
}
