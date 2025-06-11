<?php 

use Src\Service\Category\CategoryCreatorService;
use Src\Utils\ControllerUtils;


final readonly class CategoryPostController {
    private CategoryCreatorService $service;

    public function __construct() {
        $this->service = new CategoryCreatorService();
    }

    public function start(): void 
    {
        $name= $_POST["name"];
        $this->service->create($name);
        header("Location: /categorys");
    }
}
