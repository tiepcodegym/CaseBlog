<?php
include_once "BaseModel.php";
class UserModel extends BaseModel
{
    protected $table = "users";

    public function store($request)
    {
        $sql = "INSERT INTO $this->table (name,email,password,country,image,birthday) values (?,?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindValue(1,$request["name"]);
        $stmt->bindValue(2,$request["email"]);
        $stmt->bindValue(3,$request["password"]);
        $stmt->bindValue(4,$request["country"]);
        $stmt->bindValue(5,$request["image"]);
        $stmt->bindValue(6,$request["birthday"]);
        $stmt->execute();
    }

    public function update($request)
    {
        $sql = "UPDATE $this->table SET name=?,email=?,password=?,birthday=?,country=?, image=? WHERE id=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindValue(1,$request["name"]);
        $stmt->bindValue(2,$request["email"]);
        $stmt->bindValue(3,$request["password"]);
        $stmt->bindValue(4,$request["birthday"]);
        $stmt->bindValue(5,$request["country"]);
        $stmt->bindValue(6,$request["image"]);
        $stmt->bindValue(7,$request["id"]);
        $stmt->execute();
    }

    public function checkLogin($email,$password)
    {
        $sql="SELECT * FROM $this->table WHERE email=? and password=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindValue(1,$email);
        $stmt->bindValue(2,$password);
        $stmt->execute();
        return $stmt->rowCount()>0;
    }

    public function getByEmail($email)
    {
        $sql = "SELECT * FROM $this->table WHERE email=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}