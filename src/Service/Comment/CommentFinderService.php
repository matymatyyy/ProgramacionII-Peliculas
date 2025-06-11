<?php

declare(strict_types = 1);

namespace Src\Service\Comment;

use Src\Entity\Comment\Comment;
use Src\Model\Comment\CommentModel;

final readonly class CommentFinderService{
    private CommentModel $model;

    public function __construct(){
        $this->model = new CommentModel();
    }

    public function find(int $id):Comment{
        $comment = $this->model->find($id);
        return $comment;
    }


}