<?php
/**
 * App sass compiler
 */

namespace purencool_editor\Backend\Processing\LiveStyleSheet;



use purencool_editor\Backend\Processing\LiveStyleSheet\RegexString; 
use purencool_editor\Backend\Processing\LiveStyleSheet\HtmlRender; 
use purencool_editor\Backend\Processing\LiveStyleSheet\LoadInlineCSS;

/**
 * Undocumented class
 */
class LiveStyleSheetView 
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
       $obj = new LoadInlineCSS($this->app);
       return '<style>'.$obj->getResponse().'</style>';
    }

    protected function regexString(){
        $obj = new RegexString($this->app);
        return $obj->getResponse();
    }

    protected function buildHtml($htmlArr){
        
        $obj = new HtmlRender($this->app, $htmlArr);
       
        return $obj->getResponse();
    }

    /**
     * Undocumented function
     *
     * @param string $type
     * @return void
     */
    public function getResponse($type = 'html')
    {
      
       if($type == 'html'){
          $return = $this->getCSS(); 
          $return .= $this->buildHtml($this->regexString());
          return $return; 
       }
        return  '<pre>'.print_r($this->regexString(),true).'</pre>';
    }
}
