<?php
namespace factory;

/**
 * Class Factory
 * @package factory
 *
 * @property object $robot_type_array
 */
class Factory
{
    protected $robot_type_array = array();
    public $robot_array = array();

    public function addType($robot)
    {
        $class_bool = false;

        if (!empty($this->robot_type_array)) {
            foreach ($this->robot_type_array as $type_item) {
                if (get_class($type_item) == get_class($robot)) {
                    $class_bool = true;
                    break;
                }
            }

            if ($class_bool == false) {
                $this->robot_type_array[] = $robot;
            }
        } else {
            $this->robot_type_array[] = $robot;
        }
    }

    public function __call($name, $arguments)
    {
        echo 'create robot'.PHP_EOL;
        var_dump(strstr($name, 'create'), $arguments);
        echo PHP_EOL;

        for ($i = 1; $i <= $arguments[0]; $i++)
        {
            //$this->robot_array[] = new $name;
        }
    }
}