<?php

namespace Src\Service\Platform;

use Src\Model\Platform\PlatformModel;
use Src\Entity\Platform\Platform;

final readonly class PlatformCreatorService{
    private PlatformModel $model;

    public function __construct(){
        $this->model = new PlatformModel();
    }


    public function insert(string $name, string $logo, string $website): void{
        $platform = Platform::create($name,$logo,$website);
        $this->model->insert($platform);
    }
}