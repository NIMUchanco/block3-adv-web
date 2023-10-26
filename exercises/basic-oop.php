<?php
    class Backpack {
        public $name;
        public $color;
        public $size;
        public $pocketNum;
        public $strapLen;
        public $zipper = " is closed.";

        public function __construct($name, $color, $size, $pocketNum, $strapLen){
            $this->name = $name;
            $this->color = $color;
            $this->size = $size;
            $this->pocketNum = $pocketNum;
            $this->strapLen = $strapLen;
        }

        public function zipperStatus($zipper){
            if ($zipper) {
                $this->zipper = " is open.";
            } 
        }

        public function carry($item){
            echo $this->name . " is carrying " . $item . ".";
        }
    }

    $backpack1 = new Backpack("daypack", "orange", "20L", "5", "20cm");
    $backpack2 = new Backpack("travelpack", "black", "40L", "10", "40cm");

    echo "The 1st backpack is called " . $backpack1->name . " and it is " . $backpack1->color . ".<br><br>";
    echo $backpack1->carry("a laptop") . "<br><br>";
    $backpack1->zipperStatus(true);
    echo $backpack1->name . $backpack1->zipper . "<br><br>";
    echo "Let's start packing! <br><br>" ;

    echo "======================================<br><br>";
    echo "The 2nd backpack is called " . $backpack2->name . " and it is " . $backpack2->size . ".<br><br>";
    echo $backpack2->carry("a lunch box") . "<br><br>";
    $backpack2->zipperStatus(false);
    echo $backpack2->name . $backpack2->zipper . "<br><br>";

?>
