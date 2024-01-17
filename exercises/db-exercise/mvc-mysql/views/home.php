<?php
    if ($homeworks) {
        foreach ($homeworks as $homework) {
            echo $homework["hw_id"] . ": " . $homework["hw_title"] . ". " . $homework["hw_description"] . " By " . $homework["due_date"] . "<br>";
        }
    } else {
        echo "No homeworks found.";
    }
?>