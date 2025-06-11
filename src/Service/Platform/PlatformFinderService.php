<?php

namespace Src\Service\Platform;

use Src\Model\Platform\PlatformModel;
use Src\Entity\Platform\Platform;

final readonly class PlatformFinderService{
    private PlatformModel $model;

    public function __construct(){
        $this->model = new PlatformModel();
    }

    public function find(int $id): Platform{
        return $this->model->find($id);
    }
}