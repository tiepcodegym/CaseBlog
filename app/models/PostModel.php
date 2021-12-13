<?php
include_once "BaseModel.php";
class PostModel extends BaseModel
{
    protected $table = "posts";

    public function store($request)
    {
        $sql = "INSERT INTO $this->table (id,title,content,post_time) values (?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindValue(1,$request["id"]);
        $stmt->bindValue(2,$request["title"]);
        $stmt->bindValue(3,$request["content"]);
        $stmt->bindValue(4,$request["post_time"]);
        $stmt->execute();
    }

    public function update($request)
    {
        $sql = "UPDATE $this->table SET id=?,title=?,content=?,post_time=? WHERE id=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindValue(1,$request["id"]);
        $stmt->bindValue(2,$request["title"]);
        $stmt->bindValue(3,$request["content"]);
        $stmt->bindValue(4,$request["post_time"]);
        $stmt->execute();
    }

    public function getByIdUser($key)
    {
        $sql="SELECT * FROM $this->table where user_id like '%$key%'";
        $stmt= $this->dbConnect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);

  }

}