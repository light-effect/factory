<?php
namespace factory;

class UnionRobot extends Robot
{
    public $robot_array = array();

    public function addRobot($robot)
    {
        if (is_array($robot)) {
           $this->robot_array = array_merge($this->robot_array, $robot);
        } else {
            $this->robot_array[] = $robot;
        }

        $this->speed = $this->robot_array[0]->speed;
        foreach ($this->robot_array as $robot_item) {
            if ($this->speed > $robot_item->speed) {
                $this->speed = $robot_item->speed;
            }

            $this->weight = $this->weight + $robot_item->weight;
            $this->height = $this->height + $robot_item->height;
        }
    }
}