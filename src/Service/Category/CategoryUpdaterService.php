<?php

declare(strict_types = 1);

namespace Src\Service\Category;

use Src\Entity\Category\Category;
use Src\Model\Category\CategoryModel;


final readonly class CategoryUpdaterService{
    private CategoryModel $model;

    private CategoryFinderService $finder;

    public function __construct(){
        $this->model= new CategoryModel();
        $this->finder = new CategoryFinderService();
    }

    public function update(string $name, int $id): void{
        $category = $this->finder->find($id);
        $category->modify($name);
        $this->model->update($category);
    }

    
}