<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Work DB</title>
</head>
<body>
    <h1>MySQL Example</h1>

    <?php
    ini_set('display_errors',1);
        try {
            $mysqli = new mysqli("localhost:3306", "maiko_25_hw", "_781menB2", "db_homeworks");

            if ( $mysqli->connect_error ) {
                throw new Exception("Fail to connect");
            }

            $result = $mysqli->query("SELECT * FROM `homeworks`");

            while ( $row = $result->fetch_assoc() ) {
                echo $row["hw_id"] . " " . $row["hw_title"] . " " . $row["hw_description"] . " " . $row["due_date"] . "<br>";
            }

            $mysqli->close();

            $success = true;
        } catch ( Exception $e ) {
            $success = false;
        } finally {
            echo $success ? "Success" : "Fail";
        }
    ?>
</body>
</html>