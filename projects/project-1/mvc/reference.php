<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>MySQL Connection</h1>

<?php
    try {
        $mysqli = new mysqli("localhost:3306", "maiko25_mvc", "s?3v254Ur", "maiko25_mvc_db");

        if($mysqli->connect_error) {
            // exit('Could not connect');
            // echo "failed!";
            throw new Exception('Could not connect...');
        }
        // var_dump($mysqli);
        // echo "continue";
        $result = $mysqli->query("SELECT * FROM models");
        
        // echo "continue";
        while($row = $result->fetch_assoc()) {
            echo $row['ID'] . " " . $row['modelName'] . "<br>";
            // var_dump($row);
            // $results[] = $row;
        }
        // echo json_encode($results);

        $mysqli->close();

        $success = true;
    } catch(Exception $e) {
        // echo $e->getMessage();
        // echo "nothing found!";
        echo "Error: " . $e->getMessage();
        $success = false;
    } finally {
        echo $success ? "success!" : "failure:(";
        // echo "finally";
        // echo "running finally regardless of success or failure";
    }
?>