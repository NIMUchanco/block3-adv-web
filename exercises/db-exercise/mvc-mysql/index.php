<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Work DB</title>
</head>
<body>
    <h1>MVC with mySQL</h1>
    <!-- add controller -->

    <?php
        include_once("controllers/controller.php");
        //include_once("models/model.php");

        $connection1 = new connectionObject("localhost:3306", "maiko_25_hw", "_781menB2", "db_homeworks");
        $controller = new Controller($connection1);
        $controller->invoke();

        // connection 2
    ?>
</body>
</html>