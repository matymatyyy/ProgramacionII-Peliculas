<?php 
include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';
use SRc\Service\Platform\PlatformCreatorService;

final readonly class PlatformPostController extends SesionController{
    private PlatformCreatorService $service;
    public function __construct(){
        $this->service = new PlatformCreatorService();
    }

    public function start() : void {
        $this->validateUser();
        $name = $_POST["name"];
        $logo = $_POST["logo"];
        $website = $_POST["website"];
        $this->service->insert($name,$logo,$website);

    }
}