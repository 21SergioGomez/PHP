<?php
include_once 'tren.class.php';
class Estacion
{
     public $trenes = [];

     public function __construct()
     {

          for ($i = 0; $i < 6; $i++) {
               array_push($this->trenes, new Tren());
          }
     }

     public function pintaTrenes()
     {
          // pintar trenes 
          foreach ($this->trenes as $key2 => $value) {
               $this->trenes[$key2]->pinta_tren($key2);
               echo '<br>';
          }
     }


     public function nuevoTren()
     {

          $tren = new Tren;
          return $tren;
     }
}
