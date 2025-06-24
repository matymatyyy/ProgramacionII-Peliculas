<?php 

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';
use Src\Service\Category\CategorySearchService;
use Src\Service\Platform\PlatformSearchService;
final readonly class EntertainmentCreateController extends ViewController {
    private CategorySearchService $categoryService;
    private PlatformSearchService $platformService;
    public function __construct() {
        $this->categoryService = new CategorySearchService();
        $this->platformService = new PlatformSearchService();
        parent::__construct('Entertainment/admin/form');
    }

    public function start(): void 
    {
        $category = $this->categoryService->CategorySearchService();
        $platform = $this->platformService->Search();

        $data =[
            "category" => $category,
            "platform" => $platform
        ];
        parent::call($data);
    }
}
