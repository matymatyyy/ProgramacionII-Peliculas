<?php

namespace Src\Service\Category;

use Src\Entity\Category\Category;
use Src\Model\Category\CategoryModel;

final readonly class CategorySearchService{
    private CategoryModel $model;

    public function __construct(){
        $this->model = new CategoryModel();
    }

    /**
     * Summary of CategorySearchService
     * @return Category[]
     */
    public function CategorySearchService() : array {
        return $this->model->search();
    }
}