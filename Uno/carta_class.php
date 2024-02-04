<?php

class carta
{

    public $numero;
    public $color;

    ///constructor

    function __construct($numero, $color)
    {
        $this->numero = $numero;
        $this->color = $color;
    }

    function mostrar_carta()
    {
        echo ' <img src="img/uno/'.$this->numero.'_'.$this->color.'.png"/> ';
    }

   

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }
    /**
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
