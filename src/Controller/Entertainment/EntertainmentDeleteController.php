<?php 

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';
use Src\Utils\ControllerUtils;
use Src\Service\Entertainment\EntertainmentDeleterService;

final readonly class EntertainmentDeleteController extends SesionController {
    private EntertainmentDeleterService $service;

    public function __construct() {
        $this->service = new EntertainmentDeleterService();
    }

    public function start(): void 
    {
        $this->validateUser();
        $id = $_POST["id"] ?? 0;
        $this->service->delete($id);
    }
}
