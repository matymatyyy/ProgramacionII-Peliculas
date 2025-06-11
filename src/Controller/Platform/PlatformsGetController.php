<?php 

use Src\Service\Platform\PlatformSearchService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class PlatformsGetController extends ViewController{
    private PlatformSearchService $service;

    public function __construct(){
        $this->service = new PlatformSearchService();
        parent::__construct("Platform/list");
    }

    public function start(): void{
        $platform = $this->service->Search();
        $data = [
            "platform" => $platform
        ];
        parent::call($data);
    }
}