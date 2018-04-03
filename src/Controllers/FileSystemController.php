<?php
/**
 * Undocumented class
 */
class FileSystemController
{

   /**
    * Undocumented variable
    *
    * @var [type]
    */
    protected $fileSystemPath;


    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $directoryType;

    
    /**
     * Undocumented function
     *
     * @param [type] $fileSystemPath
     * @param [type] $type
     */
    public function __construct($fileSystemPath, $directoryType)
    {
        $this->fileSystemPath = $fileSystemPath;
        $this->directoryType = $directoryType;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getFileSystemController()
    {
       return [
           'name'  => 'path',
           'name1' => 'path',
           'name2' => 'path',
       ];
    }
}

$obj = new  FileSystemController('','');
print json_encode($obj->getFileSystemController());
