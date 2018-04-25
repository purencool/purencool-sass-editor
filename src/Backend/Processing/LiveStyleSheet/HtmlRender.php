<?php
/**
 * App sass compiler
 */

namespace purencool_editor\Backend\Processing\LiveStyleSheet;


/**
 * Undocumented class
 */
class HtmlRender 
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
    protected$response = '';


   


    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $htmlArray;




    
    /**
     * Undocumented function
     */
    public function __construct($app, $htmlArray)
    {
        
        $this->app = $app;
        $this->htmlArray = $htmlArray;
        $this->response = $htmlArray;
    }

    /**
     * 
     [css] => 

                    [1] => Array
                        (
                            [0] => 
button {
  background: blue !important; }
                        )

                )

            [html] => Array
                (

                    [1] => Array
                        (
                            [0] => First button
                        )

                )

            [link] => Array
                (


                    [1] => Array
                        (
                            [0] => first button
                        )

                )

            [title] => Array


                    [1] => Array
                        (
                            [0] => first button
                        )

                )

            [description] => Array
                (


                    [1] => Array
                        (
                            [0] => this is a description about the button
                        )

                )

        )
     
     * @return void
     */
    protected function createRender(){
        //print '<pre>';
       // print_r($this->htmlArray);

        
        $return = '<div id="container-wrapper"><div id="container-links">';
        $return .= '<ul id="links">';
        foreach($this->htmlArray as $array){
            $link = strtolower(str_replace(' ','-',$array['link'][1][0]));
            $return .= '<li><a href='.$link.'>'.$array['link'][1][0].'</a></li>';
        }
        $return .= '</ul>';
        $return .= '</div>';

        $return .= '<div id="container-styles-sheet">';
        foreach($this->htmlArray as $array){
            $return .= '<div class="contain-element">';
            $return .= '<span class="title">'.$array['title'][1][0].'</span>';
            $return .= '<span class="css">'.$array['css'][1][0].'</span>';
            $return .= '<span class="html">'.$array['html'][1][0].'</span>';
            $return .= '<span class="description">'.$array['description'][1][0].'</span>';
            $return .= '</div>';

        }
        $this->response = $return.'</div></div>';
    }


    /**
     * Undocumented function
     *
     * @return string
     */
    public function getResponse()
    {
        $this->createRender();
        return $this->response;
    }
}
