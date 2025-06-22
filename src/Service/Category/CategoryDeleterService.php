<?php

namespace Src\Service\Category;

use Src\Model\Category\CategoryModel;

final readonly class CategoryDeleterService{
    private CategoryModel $model;

    public function __construct(){
        $this->model = new CategoryModel();
    }

    public function delete(int $id):void{
        $this->model->delete($id);
    }
}