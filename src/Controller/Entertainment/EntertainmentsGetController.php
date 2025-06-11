<?php

use Src\Service\Entertainment\EntertainmentSearchService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class EntertainmentsGetController extends ViewController{
    private EntertainmentSearchService $service;

    public function __construct() {
        $this->service = new EntertainmentSearchService();
        parent::__construct('Entertainment/list');
    }

    public function start(): void
    {
        $entertaiments = $this->service->search();

        $data = [
            "entertaiments" => $entertaiments
        ];

        parent::call($data);
    }
}