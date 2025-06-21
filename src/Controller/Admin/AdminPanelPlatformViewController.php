<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class AdminPanelPlatformViewController extends ViewController{

    public function __construct(){
        parent::__construct("Admin/panelPlatform");
    }

    public function start(int $page): void{
        $this->validateUser();
        if ($page < 1) {
            echo "no se toca la url";
            exit;
        }
        $limit = 6;
        $ofset = ($page - 1) * $limit; 
        $data = [
            "page" => $page
        ];
        parent::call($data);
    }
}