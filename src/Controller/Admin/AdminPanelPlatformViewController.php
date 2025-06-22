<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';
use Src\Service\Platform\PlatformSearchService;
final readonly class AdminPanelPlatformViewController extends ViewController{
    private PlatformSearchService $service;
    public function __construct(){
        $this->service = new PlatformSearchService();
        parent::__construct("Admin/panelPlatform");
    }

    public function start(int $page): void{
        $this->validateUser();
        if ($page < 1) {
            echo "no se toca la url";
            exit;
        }
        $limit = 6;
        $ofset = ($page - 1) * $limit; 
        $platform = $this->service->Search();
        $data = [
            "page" => $page,
            "platform" => $platform
        ];
        parent::call($data);
    }
}