<?php

use Src\Service\People\PeoplesSearcherService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class PeoplesGetController extends ViewController {
    private PeoplesSearcherService $service;

    public function __construct() {
        $this->service = new PeoplesSearcherService();
        parent::__construct('People/list');
    }

    public function start(): void
    {
        $peoples = $this->service->search();

        $data = [
            "peoples" => $peoples
        ];

        parent::call($data);
    }
}