<?php

use Src\Service\Category\CategorySearchService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class CategorysGetController extends ViewController{
    private CategorySearchService $service;

    public function __construct() {
        $this->service = new CategorySearchService();
        parent::__construct('Category/list');
    }

    public function start(): void
    {
        $categorys = $this->service->CategorySearchService();

        $data = [
            "categorys" => $categorys
        ];

        parent::call($data);
    }
}