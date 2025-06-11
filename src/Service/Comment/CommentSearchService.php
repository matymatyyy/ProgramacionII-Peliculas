<?php

namespace Src\Service\Comment;

use Src\Model\Comment\CommentModel;
use Src\Entity\Comment\Comment;

final readonly class CommentSearchService{
    private CommentModel $model;

    public function __construct(){
        $this->model= new CommentModel();
    }

    /** @return Comment[] */
    public function search():array{
        return $this->model->search();
    }
}