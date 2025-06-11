<?php 

use Src\Service\Platform\PlatformFinderService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class PlatformGetController extends ViewController{
    private PlatformFinderService $service;

    public function __construct(){
        $this->service= new PlatformFinderService();
        parent::__construct("Platform/detail");
    }

    public function start(int $id) : void {
        $platform = $this->service->find($id);
        $data= [
            "platform" => $platform
        ];
        parent::call($data);
    }
}