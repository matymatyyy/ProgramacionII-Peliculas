<?php

namespace Src\Service\Platform;

use Src\Model\Platform\PlatformModel;
use Src\Entity\Platform\Platform;

final readonly class PlatformSearchByCriterialService{
    private PlatformModel $model;

    public function __construct(){
        $this->model = new PlatformModel();
    }

    /**
     * Summary of search
     * @return Platform[]
     */
    public function searchByCriterial(int $limit, $ofset):array{
        return $this->model->searchByCriterial($limit,$ofset);
    }
}