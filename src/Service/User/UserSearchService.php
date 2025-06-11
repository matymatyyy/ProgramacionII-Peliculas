<?php

namespace Src\Service\User;

use Src\Model\User\UserModel;
use Src\Entity\User\User;

final readonly class UserSearchService{
    private UserModel $model;

    public function __construct(){
        $this->model = new UserModel();
    }

    /**
     * Summary of Search
     * @return User[]
     */
    public function Search(): array{
        return $this->model->search();
    }
}