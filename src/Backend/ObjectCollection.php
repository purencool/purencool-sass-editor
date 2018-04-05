<?php

namespace purencool_editor\Backend;

/**
 * Any object that his needed by multiple classed are 
 * added to this collection
 */
class ObjectCollection
{

    /**
     * @var object $config
     */
    public $collection = [];

    /**
     * Undocumented function
     *
     * @param [type] $name
     * @param [type] $object
     * @return void
     */
    public function setObject($name, $object)
    {
        $this->collection[$name] = $object;
    }
}
