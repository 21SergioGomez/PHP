<?php

class partida
{

    private $Baraja;
    private $Jugadores = array();
    private $Tapete = array();
    private $Turno;

    function __construct($nJugador)
    {
        $this->Baraja = new Baraja;
        $this->Turno = 0;
        for ($i = 0; $i < $nJugador; $i++) {
            $this->Jugadores[] = new jugador($i, 10);
        }
        $this->PonerCarta($this->Baraja->getCarta());
    }
    function Jugar()
    {
        if (isset($_GET['pdf'])) $this->Jugadores[$_GET['pdf']]->MostrarPDF();
        else {
            if (isset($_GET['carta'])) $this->TirarCarta($_GET['carta']);
            if (isset($_GET['pasa'])) {
                $this->Jugadores[$this->Turno]->setCartas($this->Baraja->getCarta());
                $this->PasaTurno();
            }
            $this->MostrarTodo();
        }
    }
    function PasaTurno()
    {
        if ($this->Turno < count($this->Jugadores) - 1) {
            $this->Turno++;
        } else {
            $this->Turno = 0;
        }
    }
    function MostrarTapete()
    {
        foreach ($this->Tapete as $carta) $carta->mostrar_carta();
    }
    function MostrarTodo()
    {
        $this->MostrarTapete();
        echo '<br/>';
        echo '<br/>';
        foreach ($this->Jugadores as $i => $cartaJugador) {
            echo 'Jugador ' . $i + 1;
            echo '<br>';
            echo '<br>';
            if ($this->Turno == $i) {
                $cartaJugador->MostrarconLinks();
                echo '<a href="' . $_SERVER['PHP_SELF'] . '?pdf=' . $i . '">PDF</a>';
            } else $cartaJugador->ocultar_carta();
            echo '<br/>';
            echo '<br/>';
        }
    }
    function PonerCarta($carta)
    { //entra objeto carta
        $this->Tapete[] = $carta;
    }
    function GanarPartida()
    {
        if ($this->Jugadores[$this->Turno]->ContarCartas() == 0) {
            echo "Ganador jugador:" . $this->Jugadores;
            if ($this->Jugadores[$this->Turno]->ContarCartas() == 0) {
                return true;
            } else {
                return false;
            }
        }
    }
    function TirarCarta($ncarta)
    {  ////entra posicion de la carta en la mano del jugador
        $carta = $this->Jugadores[$this->Turno]->getCarta($ncarta);
        if ($carta->getColor() == $this->Tapete[(count($this->Tapete) - 1)]->getColor() || $carta->getNumero() == $this->Tapete[(count($this->Tapete) - 1)]->getNumero()) {
            $this->PonerCarta($carta);
            $this->PasaTurno();
        } else {
            $this->Jugadores[$this->Turno]->setCartas($carta);
            $this->Jugadores[$this->Turno]->setCartas($this->Baraja->getCarta());
            $this->PasaTurno();
        }
    }
    function RepartirCartas($n)
    {
        foreach ($this->Jugadores as $jugador) {
            for ($j = 0; $j < $n; $j++) {
                $jugador->setCartas($this->Baraja->getCarta());
            }
        }
    }
}
