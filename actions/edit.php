<?php
require_once('C:\xampp\htdocs\mvcphp\controller\controller.php');
require_once('C:\xampp\htdocs\mvcphp\model\model.php');
// $ids = $_GET['id'];
// $name = $_GET['nome'];

// echo $ids;
// echo $name;



if(isset($_GET['id'])){
    $id = $_GET['id'];
    $affectedRows = $controller->edit($id);
    if($affectedRows > 0){
        header("Location: http://localhost/mvcphp/actions/read.php");
    }
}

?>