<?php

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';
use Src\Service\Entertainment\EntertainmentSearchByCriterialService;
final readonly class AdminPanelViewController extends ViewController{
    private EntertainmentSearchByCriterialService $service;
    public function __construct(){
        $this->service = new EntertainmentSearchByCriterialService();
        parent::__construct("Admin/panel");
    }

    public function start(int $page): void{
        $this->validateUser();
        if ($page < 1) {
            echo "no se toca la url";
            exit;
        }
        $limit = 6;
        $ofset = ($page - 1) * $limit; 
        $entertainment = $this->service->searchByCriterial($limit,$ofset);
        $data = [
            "entertaiments" => $entertainment,
            "page" => $page
        ];
        parent::call($data);
    }
}