<?php

class Superhero {

    public $name;
    public $hp;
    public $force;

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function getForce()
    {
        return $this->force;
    }

    public function atk(Superhero $cible)
    {
        $cible->hp = $cible->hp - $this->force;
        if ($cible->hp < 0) {
            $cible->hp = 0;
        }
    }

    public function __construct(string $name, string $hp, string $force)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->force = $force;
    }

    public function __toString()
    {
        $str = '<b>' . $this->name . ":</b><br>"
            ."Point de vie: " . $this->hp . ".<br>"
            ."Force: " . $this->force . ".<br>";
        return $str;
    }
}