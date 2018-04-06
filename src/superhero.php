<?php

class Superhero {

    public $name;
    public $hp;
    public $force;
    public $id;
    public $image;

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


    public function punch(Superhero $cible)
    {
        $cible->hp = $cible->hp - ($this->force * 0.5);
        if ($cible->hp < 0) {
            $cible->hp = 0;
        }
    }

    public function kick(Superhero $cible)
    {
        $cible->hp = $cible->hp - ($this->force * 0.75);
        if ($cible->hp < 0) {
            $cible->hp = 0;
        }
    }

    public function combo(Superhero $cible)
    {
        $cible->hp = $cible->hp - $this->force;
        if ($cible->hp < 0) {
            $cible->hp = 0;
        }
    }

    public function falconPunch(Superhero $cible)
    {
        $cible->hp = $cible->hp - ($this->force * 1.5);
        if ($cible->hp < 0) {
            $cible->hp = 0;
        }
    }

    public function __construct(string $name, string $hp, string $force, string $id, string $image)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->force = $force;
        $this->id =(int) $id;
        $this->image = $image;
    }

    public function __toString()
    {
        $str = '<b>' . $this->name . ":</b><br>"
            ."Point de vie: " . $this->hp . ".<br>"
            ."Force: " . $this->force . ".<br>";
        return $str;
    }
}