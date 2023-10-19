<style>
  .even {
    background-color: pink;
  }

  .odd {
    background-color: lightblue;
  }

  p:nth-child(4) {
    background-color: red;
  }

  p:nth-child(5) {
    background-color: yellow;
  }

  p:nth-child(6) {
    background-color: blue;
  }
</style>

<?php

    $sampleArray = array(1, 2, 3, "red", "yellow", "blue");

    for($i = 0; $i < count($sampleArray); $i++) {
        // $class = ($i + 1) % 2 ? "even" : "odd";
        $class = $i % 2 ? "odd" : "even";
        echo "<p class = '$class'>index $i contains $sampleArray[$i]</p>";
    }

    echo "<br>";
?>
<?php

    $name = "maiko";
    echo $name[0];

    echo "<br><br>";
?>
<?php
    function isPalindrome($word) {
        $word = strtolower($word);
        $reverse = strrev($word);
        if($word == $reverse) {
            echo "$word is a palindrome";
        } else {
            echo "$word is not a palindrome";
        }
    }

    $word = "racecar";
    isPalindrome($word);

    echo "<br><br>";
?>
<?php

    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    function checkPalindrome($word) {
        $words = "";
        $reverse = "";
        $count = 0;

        while ($word[$count] != null) {
            $count++;
        }

        // echo "<br>";
        // echo $count;
        // echo "<br>";

        //origial word without spaces
        for ($j = 0 ; $j < $count; $j++) {
            if ($word[$j] == " ") {
                continue;
            } else if ($word[$j] >= 'A' && $word[$j] <= 'Z') {
                $words .= chr(ord($word[$j]) + 32);
                // $words .= (string) (((int) $word[$j]) + 32) ;
            } else {
                $words .= $word[$j];
            }
        }

        //reverse without spaces
        for ($i = $count -1; $i >= 0; $i--) {
            $reverse .= $words[$i];
        }


        // echo $words;
        // echo "<br>";
        // echo $reverse;
        // echo "<br><br>";

        if ($words == $reverse) {
            echo "$word is a palindrome";
        } else {
            echo "$word is not a palindrome";
        }
    }

    checkPalindrome("taco cat");
    echo "<br>";
    checkPalindrome("Taco cat");
    echo "<br>";
    checkPalindrome("adam");

?>