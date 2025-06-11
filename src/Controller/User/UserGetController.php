<?php

use Src\Service\User\UserFinderService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class UserGetController extends ViewController{
    private UserFinderService $service;

    public function __construct(){
        $this->service = new UserFinderService();
        parent::__construct("User/detail");
    }

    public function start(int $id): void{
        $user=$this->service->find($id);
        $data=[
            "user"=>$user
        ];
        parent::call($data);
    }
}