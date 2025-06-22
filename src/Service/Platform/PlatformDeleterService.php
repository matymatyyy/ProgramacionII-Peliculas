<?php

namespace Src\Service\Platform;

use Src\Model\Platform\PlatformModel;

final readonly class PlatformDeleterService{
    private PlatformModel $model;

    public function __construct(){
        $this->model = new PlatformModel();
    }

    public function delete(int $id):void{
        $this->model->delete($id);
    }
}