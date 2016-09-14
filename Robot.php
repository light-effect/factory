<?php
namespace factory;

/**
 * Abstract class of robot
 *
 * Class Robot
 * @package factory
 *
 * @property integer $weight
 * @property integer $height
 * @property integer $speed
 */
Abstract Class Robot
{
    public $weight;
    public $height;
    public $speed;

    /**
     * Getting the speed of robot
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Getting the weight of robot
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Getting the height of robot
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
}