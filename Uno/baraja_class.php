<?php

class baraja
{

    public $cartas = [];

    function __construct()
    {
        $color = array('red', 'blue', 'green', 'yellow');
        $numero = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'skip', 'picker', 'picker');

        for ($i = 0; $i < count($color); $i++) {
            for ($j = 0; $j < count($numero); $j++) {
                $this->cartas[] = new carta($numero[$j], $color[$i]);
            }
        }
        $this->barajar();
    }

    /**
     * Get the value of cartas
     */
    public function barajar()
    {
        shuffle($this->cartas);
    }

    public function getcarta()
    {
        return array_pop($this->cartas);
    }

    public function mostrar_baraja()
    {
        foreach ($this->cartas as $carta) $carta->mostrar_carta();
    }
}
