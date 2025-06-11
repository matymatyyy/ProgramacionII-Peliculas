<?php

use Src\Service\Comment\CommentSearchService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class CommentsGetController extends ViewController{
    private CommentSearchService $service;

    public function __construct(){
        $this->service = new CommentSearchService();
        parent::__construct("Comment/list");
    }

    public function start(): void{
        $comments = $this->service->search();
        $data=[
            "comments"=>$comments
        ];
        parent::call($data);
    }
}