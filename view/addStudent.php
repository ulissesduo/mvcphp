<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>
    <form action="http://localhost/mvcphp/actions/create.php" method="POST">
        <input type="text" name="nome">
        <div>
            <input type="submit" name="create" value="Submit">
            <input type="button" value="Cancel">
        </div>
    </form>
</body>
</html>