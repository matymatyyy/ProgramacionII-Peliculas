<?php 

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';
use Src\Service\Entertainment\EntertainmentCreatorService;

final readonly class EntertainmentPostController extends SesionController {
    private EntertainmentCreatorService $service;

    public function __construct() {
        $this->service = new EntertainmentCreatorService();
    }

    public function start(): void 
    {
        $this->validateUser();
        $name= $_POST["name"];
        $type= $_POST["type"];
        $relase_date= $_POST["release_date"];
        $image = $_POST["image"];
        $relase_date = new DateTime($relase_date);
        $ending= $_POST["ending"];
        $description = $_POST["description"];
        $qualification = $_POST["qualification"];
        $id_category = $_POST["id_category"] ?? 1;
        $id_platform = $_POST["id_platform"] ?? 1;
        $this->service->create($type,$relase_date,$ending,$name,$description,$qualification,$image,$id_category,$id_platform);
        header('Location: http://localhost:91/admin/panel/1');
        exit();
    }
}
