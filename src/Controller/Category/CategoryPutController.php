<?php 

use Src\Service\Category\CategoryUpdaterService;
include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';

final readonly class CategoryPutController extends SesionController{
    private CategoryUpdaterService $service;

    public function __construct() {
        $this->service = new CategoryUpdaterService();
    }

    public function start(int $id): void 
    {
        $this->validateUser();
        $name = $_POST["name"];
        $this->service->update($name, $id);
        header('Location: http://localhost:91/admin/panelCategory/1');
        exit();
    }
}
