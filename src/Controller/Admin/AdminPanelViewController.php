<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class AdminPanelViewController extends ViewController{


    public function __construct(){
        parent::__construct("Admin/panel");
    }

    public function start(): void{
        $this->validateUser();
        parent::call("");
    }
}