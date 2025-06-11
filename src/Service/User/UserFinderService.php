<?php

namespace Src\Service\User;

use Src\Model\User\UserModel;
use Src\Entity\User\User;

final readonly class UserFinderService{
    private UserModel $model;

    public function __construct(){
        $this->model = new UserModel();
    }

    public function find(int $id): ?User{
        return $this->model->find($id);
    }
}