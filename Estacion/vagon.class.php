<?php

class Vagon
{
    public $personas;

    public function __construct()
    {
        $this->personas = rand(15, 45);
    }

    public function pinta_vagon($key, $key2)
    {
        $smarty = new Smarty();
        $smarty->assign('persona', $this->personas);
        $smarty->assign('key', $key);
        $smarty->assign('key2', $key2);
        $smarty->display('template-vagon.html');
    }
}
