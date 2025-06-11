<?php

declare(strict_types = 1);

namespace Src\Service\Category;

use Src\Entity\Category\Category;
use Src\Model\Category\CategoryModel;


final readonly class CategoryFinderService{
    private CategoryModel $model;

    public function __construct(){
        $this->model= new CategoryModel();
    }

    public function find(int $id): Category{
        
        $category = $this->model->find($id);
        #falta el try cath 
        return $category;
    }

    
}