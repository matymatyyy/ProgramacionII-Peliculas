<?php

declare(strict_types = 1);

namespace Src\Service\Category;

use Src\Entity\Category\Category;
use Src\Model\Category\CategoryModel;


final readonly class CategoryCreatorService{
    private CategoryModel $model;

    public function __construct(){
        $this->model= new CategoryModel();
    }

    public function create(string $name): void{
        $category = Category::create($name);
        $this->model->insert($category);
    }

    
}