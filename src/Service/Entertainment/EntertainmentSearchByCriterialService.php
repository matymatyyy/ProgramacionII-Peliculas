<?php

namespace Src\Service\Entertainment;

use Src\Model\Entertainment\EntertainmentModel;
use Src\Entity\Entertainment\Entertainment;

final readonly class EntertainmentSearchByCriterialService{
    private EntertainmentModel $model;

    public function __construct(){
        $this->model = new EntertainmentModel();
    }

    /**
     * Summary of search
     * @return Entertainment[]
     */
    public function searchByCriterial(int $limit, $ofset):array{
        return $this->model->searchByCriterial($limit,$ofset);
    }
}