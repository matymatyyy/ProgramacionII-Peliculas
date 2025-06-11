<?php

namespace Src\Service\Entertainment;

use Src\Model\Entertainment\EntertainmentModel;

final readonly class EntertainmentDeleterService{
    private EntertainmentModel $model;

    public function __construct(){
        $this->model = new EntertainmentModel();
    }

    public function delete(int $id):void{
        $this->model->delete($id);
    }
}