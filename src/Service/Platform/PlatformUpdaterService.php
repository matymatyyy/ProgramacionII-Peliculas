<?php 

declare(strict_types = 1);

namespace Src\Service\Platform;

use Src\Model\Platform\PlatformModel;

use DateTime;

final readonly class PlatformUpdaterService{
    private PlatformModel $model;

    private PlatformFinderService $finder;

    public function __construct(){
        $this->finder = new PlatformFinderService();
        $this->model = new PlatformModel();
    }

    public function update (int $id, string $name, string $logo, string $website): void{

        $platform = $this->finder->find($id);
        $platform->modify($id,$name,$logo,$website);
        $this->model->update($platform);
    }
}