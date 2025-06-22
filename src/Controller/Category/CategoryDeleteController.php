<?php 

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SesionController.php';
use Src\Service\Category\CategoryDeleterService;

final readonly class CategoryDeleteController extends SesionController {
    private CategoryDeleterService $service;

    public function __construct() {
        $this->service = new CategoryDeleterService();
    }

    public function start(): void 
    {
        $this->validateUser();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;

            if ($id !== null) {
                $this->service->delete($id);
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'message' => 'ID no enviado']);
            }
        }
        
    }
}
