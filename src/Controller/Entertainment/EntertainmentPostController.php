<?php 

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';
use Src\Utils\ControllerUtils;
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
        $this->service->create($type,$relase_date,$ending,$name,$description,$qualification,$image);
        header("Location: /entertainments");
    }
}
