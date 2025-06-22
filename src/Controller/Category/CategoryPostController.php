<?php 

use Src\Service\Category\CategoryCreatorService;
include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';

final readonly class CategoryPostController extends SesionController{
    private CategoryCreatorService $service;

    public function __construct() {
        $this->service = new CategoryCreatorService();
    }

    public function start(): void 
    {
        $this->validateUser();
        $name= $_POST["name"];
        $this->service->create($name);
        header('Location: http://localhost:91/admin/panelCategory/1');
        exit();
    }
}
