<?php
class View{

    public function render($data){
        if($data->rowCount() > 0){
            echo "Usernames: <br>";
            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                // echo "to no if";
                echo $row['id'] . "  " ;
            
                echo $row['nome'] . " <a href='delete.php?id=" . $row['id'] . "'>Delete</a> <a href='edit.php?id=" . $row['id'] . "'>Editar</a><br>";

            }
        }
        else{       

            echo "error: No data found: to no else";
            return;
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>teste</p>
    <a href="http://localhost/mvcphp/actions/read.php">read</a><br>
    <a href="http://localhost/mvcphp/view/create.php">create</a>
    
</body>
</html>