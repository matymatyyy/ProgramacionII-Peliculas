<?php 

use Src\Service\Entertainment\EntertainmentFinderService;
use Src\Service\Category\CategorySearchService;
use Src\Service\Platform\PlatformSearchService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class EntertainmentUpdateController extends ViewController {
    private EntertainmentFinderService $service;
    private CategorySearchService $categoryService;
    private PlatformSearchService $platformService;

    public function __construct() {
        $this->service = new EntertainmentFinderService();
        $this->categoryService = new CategorySearchService();
        $this->platformService = new PlatformSearchService();
        parent::__construct('Entertainment/admin/update_form');
    }

    public function start(int $id): void 
    {
        $this->validateUser();
        $entertainment = $this->service->find($id);
        $category = $this->categoryService->CategorySearchService();
        $platform = $this->platformService->Search();
        $data = [
            "entertainment" => $entertainment,
            "category" => $category,
            "platform" => $platform
        ];

        parent::call($data);
    }
}
