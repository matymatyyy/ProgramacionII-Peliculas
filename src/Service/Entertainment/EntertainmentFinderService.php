<?php

namespace Src\Service\Entertainment;

use Src\Model\Entertainment\EntertainmentModel;
use Src\Entity\Entertainment\Entertainment;

final readonly class EntertainmentFinderService{
    private EntertainmentModel $model;

    public function __construct(){
        $this->model = new EntertainmentModel();

    }

    public function find(int $id): Entertainment{
        $entertainment = $this->model->find($id);
        return $entertainment;
    }
}