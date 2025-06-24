<?php

namespace Src\Service\Category;

use Src\Model\Category\CategoryModel;
use Src\Entity\Category\Category;

final readonly class CategorySearchByCriterialService{
    private CategoryModel $model;

    public function __construct(){
        $this->model = new CategoryModel();
    }

    /**
     * Summary of search
     * @return Category[]
     */
    public function searchByCriterial(int $limit, $ofset):array{
        return $this->model->searchByCriterial($limit,$ofset);
    }
}