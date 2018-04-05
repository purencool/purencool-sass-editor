<?php
/**
 *  @author purencool <purencool@gmail.com>
 *  @copyright GPLV3
 */
namespace purencool_editor\Backend\Lib;

/**
 * Displays backend checks
 */
class Message 
{

    /**
     * Backend message
     *
     * @var string
     */
    protected $message = [];

  
    /**
     * @return void
     */
    public function getMessages()
    {
        $return = "<h1>Checking system</h1><ul>";
        foreach ($this->message as $message) {
            $return .= "<li>$message</li>";
        }
        $return .="</ul>";
        return $return;
    }

    /**
     * @param string $message
     * @return void
     */
    public function setMessage($message)
    {
        $this->message[] = $message;
    }
}
