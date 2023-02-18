<?php
//require view and controller
require_once('C:\\xampp\htdocs\mvcphp\controller\controller.php');
require_once('C:\\xampp\htdocs\mvcphp\view\filter.php');

// intance model view (filter) and controller
$model = new Model();
$filter = new Filter();
$controller = new Controller($model, $filter);

// controller method filter
$result = $controller->filter(300);
// echo 'ahsudhuasdhuasdhu' . $result;
if ($result) {
    echo "<table>";
    echo "<tr><th>ID</th><th>readFilterTest</th></tr>";
    foreach ($result as $row) {
      echo "<tr><td>{$row['id']}</td><td>{$row['nome']}</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No data found.";
}

?>