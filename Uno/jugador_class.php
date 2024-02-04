<?php
require_once 'carta_class.php';
class jugador
{

    private $Nombre;
    private $Cartas = array();

    function __construct($n)
    {
        $this->setNombre($n);
    }

    function getNombre()
    {
        return $this->Nombre;
    }
    function setNombre($n)
    {
        $this->Nombre = $n;
    }
    function setCartas($carta)
    {
        $this->Cartas[] = $carta;
    }

    function getCarta($n)
    { //quita la carta deseada
        $carta = array_splice($this->Cartas, $n, 1);
        return $carta[0];
    }

    function Mostrar()
    {
        foreach ($this->Cartas as $carta) {
            $carta->mostrar_carta();
        }
    }

    function ocultar_carta()
    {
        foreach ($this->Cartas as $carta) {
            echo ' <img width="90" src="img/uno/uno.png"/> ';
        }
    }

    function MostrarconLinks()
    {
        foreach ($this->Cartas as $i => $carta) {
            echo ' <a href="' . $_SERVER['PHP_SELF'] . '?carta=' . $i . '"> ';
            $carta->mostrar_carta();
            echo '</a>';
        }
        echo ' <a href="' . $_SERVER['PHP_SELF'] . '?pasa=1">Robar</a> ';
    }
    function ContarCartas()
    {
        echo count($this->Cartas);
        return count($this->Cartas);

    }
    function MostrarPDF()
    {
    }
}
