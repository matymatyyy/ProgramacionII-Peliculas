<?php 
include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';
use Src\Service\Platform\PlatformFinderService;
final readonly class PlatformUpdateController extends ViewController{
    private PlatformFinderService $service;
    public function __construct(){
        $this->service = new PlatformFinderService();
        parent::__construct("Platform/admin/update_form");
    }

    public function start(int $id) : void {
        $platform = $this->service->find($id);

        $data = [
            "platform" => $platform
        ];
        parent::call($data);
    }
}