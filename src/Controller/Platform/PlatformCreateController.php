<?php 
include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class PlatformCreateController extends ViewController{
    public function __construct(){
        parent::__construct("Platform/admin/form");
    }

    public function start() : void {
        parent::call("");
    }
}