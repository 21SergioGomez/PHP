<?php
include_once 'vagon.class.php';
class Tren
{
    public $vagones = [];

    public function __construct()
    {

        $numvagones = rand(3, 6);

        for ($i = 0; $i < $numvagones; $i++) {
            array_push($this->vagones, new Vagon());
        }
    }

    public function pinta_locomotora($key3)
    {
        $smarty = new Smarty();
        $smarty->assign('locomotora');
        $smarty->assign('key3', $key3);
        $smarty->display('template_locomotora.html');
    }

    public function pinta_tren($key2)
    {
        $this->pinta_locomotora($key2);
        foreach ($this->vagones as $key => $value) {
            $value->pinta_vagon($key, $key2);
        }
    }
}
