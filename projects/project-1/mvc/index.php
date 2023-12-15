<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Project 1</title>
</head>
<body>
    <h1>Computer Builder</h1>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

        include_once("controllers/controller.php");

        $connection1 = new connectionObject("localhost:3306", "maiko25_mvc", "s?3v254Ur", "maiko25_mvc_db");
        $model = new computerModel($connection1);
        $models = $model->selectAll();

        include("views/home.php");
    ?>
</body>
</html>