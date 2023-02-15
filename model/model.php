<?php
require_once('C:\xampp\htdocs\mvcphp\config\config.php');
class Model{
    private $PDO;
    public function __construct()
    {
        // call database
        // instance of db object
        $con = new db();
        $this->PDO = $con->connection();
    }   

    //create
    public function createData($name) {
        $sql = "INSERT INTO `username`(`nome`) VALUES ('$name')";
        if($this->PDO->query($sql) == TRUE){
            return true;
        }else{        
            return false;
        }
    }

    //read
    public function readData(){
        $sql = "SELECT * FROM username";
        $result = $this->PDO->query($sql);
        if($result){
            return $result;
        }
        else{
            return false;
        }
        // echo "this is the read method";
    }

    // delete
    public function deleteData($id){
        $sql = "DELETE FROM username WHERE id=?";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        // $stmt->bindParam(2, $name, PDO::PARAM_STR);
        
        if($stmt->execute()){
            return true;
        }
        else{
            echo "delete failed";
            return false;
        }
    }

    // edit
    public function editData($id){
        $sql = "UPDATE `username` SET `nome`='editado' WHERE id=?";
        // UPDATE `username` SET `name`='editado' WHERE id=?;
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }
        else{
            echo "edition failed";
            return false;
        }
    }
}
?>