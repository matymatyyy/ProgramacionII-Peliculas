<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';
use Src\Service\Category\CategorySearchService;
final readonly class AdminPanelCategoryViewController extends ViewController{
    private CategorySearchService $service;
    public function __construct(){
        $this->service = new CategorySearchService();
        parent::__construct("Admin/panelCategory");
    }

    public function start(int $page): void{
        $this->validateUser();
        if ($page < 1) {
            echo "no se toca la url";
            exit;
        }
        $limit = 6;
        $ofset = ($page - 1) * $limit; 
        $category = $this->service->CategorySearchService();
        $data = [
            "page" => $page,
            "category" => $category
        ];
        parent::call($data);
    }
}