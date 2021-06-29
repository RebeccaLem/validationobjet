<?php

class Archer extends Character 
{
    public $arrow = 10;

    public function turn($target)
    {
        $rand = rand(1, 100);
        if($rand <= 50) {
            $this->shoot($target);
        } else if($rand >= 50) {
            $this->aim($target);
        } else if ($this->arrow == 0) {
            $this->stab($target);
        }
        
    }

    public function shoot($target)
    {
        $target->setHealthPoints($this->damage);
        $this->arrow - 1;
        $status = "$this->name tire sur $target->name! Il reste $target->healthPoints points de vie à $target->name.";
        return $status; 

        
    }

    public function aim($target)
    {
        if($this->turn($target) == false) {
            $rand = rand(1, 3)/10;
            $target->setHealthPoints($this->damage);
            $status = "$this->name attaque $target->name! Il reste $target->healthPoints points de vie à $target->name.";
            return $status;    
        }
    }

    public function stab($target) 
    {
        $damage = 2;
        $target->setHealthPoints($this->damage);
        $status = "$this->name attaque $target->name! Il reste $target->healthPoints points de vie à $target->name.";
        return $status;    
    }

}