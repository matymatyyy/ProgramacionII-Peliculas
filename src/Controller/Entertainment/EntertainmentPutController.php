<?php

use Src\Service\Entertainment\EntertainmentUpdaterService;
include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';

final readonly class EntertainmentPutController extends SesionController{
    private EntertainmentUpdaterService $service;

    public function __construct() {
        $this->service = new EntertainmentUpdaterService();
    }

    public function start(int $id): void {
        $this->validateUser();
        $type = $_POST["type"] ?? null;
        $release_date = $_POST["release_date"] ?? null;
        $release_date = new DateTime($release_date);
        $ending = $_POST["ending"] ?? null;
        $image = $_POST["image"] ?? "";
        $name = $_POST["name"] ?? null;
        $description = $_POST["description"] ?? null;
        $qualification = $_POST["qualification"] ?? null;

        $this->service->update($id,$type, $release_date, $ending, $name, $description, $qualification, $image);
        header('Location: http://localhost:91/admin/panel/1');
        exit();
    }
}
