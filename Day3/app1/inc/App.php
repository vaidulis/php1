<?php

class App {
    public function __construct()
    {
        $this->route();
    }
    private function route()
    {

    }
}
private function view($file)
{
    require DIR.'front/'.$file.'.php';
}
