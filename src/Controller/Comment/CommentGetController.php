<?php 

use Src\Service\Comment\CommentFinderService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class CommentGetController extends ViewController{
    private CommentFinderService $service;

    public function __construct(){
        $this->service = new CommentFinderService();
        parent::__construct("Comment/detail");
    }

    public function start(int $id): void{
        $comment = $this->service->find($id);

        $data= [
            "comment" => $comment
        ];

        parent::call($data);
    }
}