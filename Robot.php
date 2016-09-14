<?php
namespace factory;

Abstract Class Robot
{
    public $weight;
    public $height;
    public $speed;

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getWeight()
    {
        return $this->weight;
    }
    public function getHeight()
    {
        return $this->height;
    }
}