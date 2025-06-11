<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';

final readonly class AdminLogoutController extends SesionController{

    public function start(): void{
        $this->logout();
    }
}