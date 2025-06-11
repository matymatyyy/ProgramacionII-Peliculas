<?php

use Src\Service\User\UserSearchService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class UsersGetController extends ViewController{
    private UserSearchService $service;

    public function __construct(){
        $this->service = new UserSearchService();
        parent::__construct("User/list");
    }

    public function start(): void{
        $users = $this->service->Search();
        $data = [
            "users" => $users
        ];
        parent::call($data);
    }
}