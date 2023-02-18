<?php
class Filter{

    public function filters($data){
        if($data->rowCount() > 0){
            // echo "deu";
            while($row = $data->fetch(PDO::FETCH_ASSOC)){
                echo $row['id'] . "<br>";
                echo $row['nome'] . "<a href=''>DEU CERTO</a>";
            }
        }
        else{
            echo "erro";
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
    <title>Filter</title>
</head>
<body>
    <a href="http://localhost/mvcphp/actions/readFilter.php">readFilter</a><br>
    <a href="http://localhost/mvcphp/actions/read.php">read</a><br>

    
</body>
</html>