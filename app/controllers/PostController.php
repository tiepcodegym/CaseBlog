<?php
include_once "app/models/PostModel.php";
class PostController
{
    protected $PostModel;
    public function __construct()
    {
        $this->PostModel= new PostModel();
    }

//    public function showAll()
//    {
//        $posts = $this->PostModel->getAll();
//        include_once "app/views/post/list.php";
//    }
    public function showByIdUser()
    {
        $posts = $this->PostModel->getByIdUser($_SESSION["user"]->id);
        include_once "app/views/post/list.php";
    }

    public function create()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            include_once "app/views/post/create.php";
        }else{
            try{
                $this->PostModel->store($_REQUEST);
                header("location:index.php?page=post-list");
            }catch (PDOException $e){
                echo $e->getMessage();
            }

        }
    }

    public function delete()
    {
        if(isset($_REQUEST["id"])){
            $this->PostModel->deleteById($_REQUEST["id"]);
            header("Location:index.php?page=post-list");
        }else{
            header("Location:index.php?page=post-list");
        }
    }

    public function edit()
    {
        if(isset($_REQUEST["id"])){
            $post=$this->PostModel->getById($_REQUEST["id"]);
            include_once "app/views/post/update.php";
        }
    }

    public function update()
    {
        if(isset($_REQUEST["id"])){
            $this->PostModel->update($_REQUEST);
            header("Location:index.php?page=post-list");
        }
    }
    public function detail()
    {
        if(isset($_REQUEST["id"])){
            $post=$this->PostModel->getById($_REQUEST["id"]);
            include_once "app/views/post/detail.php";
        }
    }
}