<?php 
include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';
use SRc\Service\Platform\PlatformUpdaterService;

final readonly class PlatformPutController extends SesionController{
    private PlatformUpdaterService $service;
    public function __construct(){
        $this->service = new PlatformUpdaterService();
    }

    public function start(int $id) : void {
        $this->validateUser();
        $name = $_POST["name"];
        $logo = $_POST["logo"];
        $website = $_POST["website"];
        $this->service->update($id,$name,$logo,$website);
        header('Location: http://localhost:91/admin/panelPlatform/1');
        exit();
    }
}