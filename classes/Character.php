<?php

abstract class Character
{
    public $name;
    public $healthPoints = 100;
    public $magicPoints = 20;
    public $damage = 15;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getLifePoints() {
        return $this->healthPoints;
    }

    public function setLifePoints($damage) {
        $this->healthPoints -= round($damage);
        if ($this->healthPoints <= 0) {
            $this->healthPoints = 0;
        }
        return;
    }

    public function isAlive() {
        if ($this->healthPoints > 0) {
            return true;
        } else {
            return false;
        }
    }
}