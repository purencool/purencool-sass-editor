<?php
/**
 * App sass compiler
 */

namespace purencool_editor\Backend\Processing;

use Nette\Utils\Finder;

/**
 * Undocumented class
 */
class FileFinder
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

        if($this->directory === null){
            $directory =  $this->app['config']->getSassDirectory();
        } elseif($this->directory === 'css'){
            $directory =  $app['config']->getCssDirectory();
        }elseif($this->directory === 'image'){
            $directory =  $app['config']->getCssDirectory();
        } else{
            $directory =  $this->app['config']->getSassDirectory();
        }

        $return =[];
       
        foreach (Finder::findFiles('*.scss')->from($directory) as $key => $file) {
           $exploded = explode('/',$file);
           $filename = end($exploded);
           array_pop($exploded);
           $return[] = [
             'default_path' => $key,
             'file_name' => $filename,
             'full_path' => implode('/', $exploded)
           ];

        }


        return $return;
    }

    public function getResponse($fileType = null)
    {
      
        return  \json_encode($this->fileFinder($fileType));
    }
}
