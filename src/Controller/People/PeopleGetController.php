<?php 

use Src\Service\People\PeopleFinderService; 

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class PeopleGetController extends ViewController {
    private PeopleFinderService $service;

    public function __construct() {
        $this->service = new PeopleFinderService();
        parent::__construct('People/detail');
    }

    public function start(int $id): void 
    {
        $people = $this->service->find($id);
        
        $data = [
            "people" => $people,
        ];

        parent::call($data);
    }
}
