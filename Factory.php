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
        $prefix = 'create';
        $class_name = '';

        if (strpos($name, $prefix) === 0) {
            $class_name = substr($name, strlen($prefix));
        }

        foreach ($this->robot_type_array as $type_item) {
            if (strpos(get_class($type_item), $class_name) !== false) {
                $this->robot_array = array_fill(0, $arguments[0], $type_item);
                break;
            }
        }

        return $this->robot_array;
    }
}