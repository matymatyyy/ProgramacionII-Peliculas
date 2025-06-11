<?php

namespace Src\Service\Platform;

use Src\Model\Platform\PlatformModel;
use Src\Entity\Platform\Platform;

final readonly class PlatformSearchService{
    private PlatformModel $model;

    public function __construct(){
        $this->model = new PlatformModel();
    }

    /**
     * Summary of Search
     * @return Platform[]
     */
    public function Search(): array{
        return $this->model->Search();
    }
}