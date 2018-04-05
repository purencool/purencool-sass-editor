<?php
namespace purencool_editor\Backend\Controllers;



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
    protected $fileContents;

    
    /**
     * Undocumented function
     *
     * @param [type] $fileContents
     */
    public function __construct($fileContents)
    {
        $this->fileContents = $fileContents;
    
   }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getFileContentsController()
    {
       return ['contents'=> 'Alalalal
          hakfakk 
          lalaksksk 
          haksk 
          haksk 
          hakshaaa'
       ];
    }
}

$obj = new  FileContentsController('');
print json_encode($obj->getFileContentsController());
