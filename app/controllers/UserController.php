<?php
include_once "app/models/UserModel.php";

class UserController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel= new UserModel();
    }

    public function showAll()
    {
        $users = $this->userModel->getAll();
        include_once "app/views/user/list.php";
    }

    public function create()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            include_once "app/views/user/create.php";
        }else{
            if (isset($_FILES["fileUpToLoad"])) {
                $targetFolder = "upload/";
                $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
                $targetFile = $targetFolder . $nameImage;
                if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                    echo "upload thanh cong";
                    $_REQUEST["image"] = $nameImage;
                } else {
                    echo "upload khong thanh cong";
                }
            }
            try{
                $this->userModel->store($_REQUEST);
                header("location:index.php?page=user-list");
            }catch (PDOException $e){
                echo $e->getMessage();
            }

        }
    }

    public function delete()
    {
        if(isset($_REQUEST["id"])){
            $this->userModel->deleteById($_REQUEST["id"]);
            header("Location:index.php?page=user-list");
        }else{
            header("Location:index.php?page=user-list");
        }
    }

    public function edit()
    {
        if(isset($_REQUEST["id"])){
            $user=$this->userModel->getById($_REQUEST["id"]);
            include_once "app/views/user/update.php";
        }
    }

    public function update()
    {
        if(isset($_REQUEST["id"])){
            $user = $this->userModel->getById($_REQUEST["id"]);
            $_REQUEST["image"] = $user->image;
            if (isset($_FILES["fileUpToLoad"])) {
                $targetFolder = "upload/";
                $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
                $targetFile = $targetFolder . $nameImage;
                if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                    echo "upload thanh cong";
                    $_REQUEST["image"] = $nameImage;
                } else {
                    echo "upload khong thanh cong";
                }
            }
            $this->userModel->update($_REQUEST);
            header("Location:index.php?page=user-list");
        }
    }
    public function detail()
    {
        if(isset($_REQUEST["id"])){
            $user=$this->userModel->getById($_REQUEST["id"]);
            include_once "app/views/user/detail.php";
        }
    }

}