<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';
use Src\Service\Admins\AdminsFinderService;

final readonly class AdminLoginController extends SesionController{
    private AdminsFinderService $service;

    public function __construct(){
        $this->service = new AdminsFinderService();
    }

    public function start(): void{
        $username = $_POST["username"];
        $password = $_POST["password"];

        $user = $this->service->find($username, $password);
        if (!empty($user)) {
            $this->login($user->id());
        }else{
            header("Location: /admin/");
            die();
        }
    }
}