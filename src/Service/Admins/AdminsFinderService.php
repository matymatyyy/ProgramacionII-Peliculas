<?php

namespace Src\Service\Admins;

use Src\Model\Admins\AdminsModel;
use Src\Entity\Admins\Admins;

final readonly class AdminsFinderService{
    private AdminsModel $model;

    public function __construct(){
        $this->model = new AdminsModel();
    }

    public function find(string $username, string $password): ?Admins{
        return $this->model->find($username, $password);
    }
}