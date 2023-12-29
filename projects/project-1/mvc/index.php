<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Project 1</title>
</head>
<body style="padding:.5em 1.5em;">
    <h1>Computer Builder</h1>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

        include_once 'controllers/controller.php';
        include_once '_includes/config.php';

        $connection = new ConnectionObject($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['database']);
        $model = new computerModel($connection);
        $models = $model->selectAll();

        include 'views/home.php';

    ?>
</body>
</html>