<?php

namespace Src\Service\Entertainment;

use Src\Model\Entertainment\EntertainmentModel;
use Src\Entity\Entertainment\Entertainment;

final readonly class EntertainmentSearchCompletService{
    private EntertainmentModel $model;

    public function __construct(){
        $this->model = new EntertainmentModel();
    }

    /**
     * Summary of search
     * @return Entertainment[]
     */
    public function searchComplet():array{
        return $this->model->searchComplet();
    }
}