<?php
    ini_set('display_errors', 1);

    class Backpack {
        public $name;
        public $color;
        public $size;
        public $pocketNum;
        public $strapLen;
        public $zipper = " is closed.";
        private $itemList = [];
        private $isFull = false;

        // constructor
        public function __construct($name, $color, $size, $pocketNum, $strapLen) {
            $this->name = $name;
            $this->color = $color;
            $this->size = $size;
            $this->pocketNum = $pocketNum;
            $this->strapLen = $strapLen;
        }

        // public methods
        public function zipperStatus($zipper) {
            if ($zipper) {
                $this->zipper = " is open.";
            }
        }
        public function changeStrapLen($lengthLeft, $lengthRight) {
            $this->strapLen = ["left" => $lengthLeft, "right" => $lengthRight];
        }
        public function addItem($item) {
            if(!$this->isFull()) {
                $this->itemList[] = $item;
                if (count($this->itemList) == (trim($this->size, "L") / 5)) {
                    $this->isFull = true;
                }
            } else {
                echo $this->name . " is full.";
            }
            
        }
        public function displayItems() {
            echo $this->name . " contains: ";
            for ($i = 0; $i < count($this->itemList); $i++) {
                if ($i == count($this->itemList) - 1) {
                    echo "and " . $this->itemList[$i] . ".";
                } else {
                    echo $this->itemList[$i] . ", ";
                }
            }
        }
        public function getItem($index) {
            if ($this->isEmpty()) {
                return null;
            } else {
                return $this->itemList[$index];
            }
        }

        // private methods
        private function isEmpty() {
            if (!count($this->itemList)) {
                return true;
            } else {
                return false;
            }
        }
        private function isFull() {
            return $this->isFull;
        }
    }

    // Instantiate two objects
    $backpack1 = new Backpack("daypack", "orange", "20L", "5", "20cm");
    $backpack2 = new Backpack("travelpack", "black", "40L", "10", "40cm");

    // Display the properties
    echo "<h2>Object: Backpack</h2>";

    // The first object
    echo "the 1st backpack is called " . $backpack1->name . ", it is " . $backpack1->color . " and the both strap lengths are " . $backpack1->strapLen . ".<br><br>";
    $backpack1->changeStrapLen("20cm", "25cm");
    echo "changed the LEFT strap length to " . $backpack1->strapLen["right"] . ".<br><br>";
    $backpack1->zipperStatus(true);
    echo $backpack1->name . $backpack1->zipper ."<br><br>";
    echo "let's start packing!<br><br>";
    $backpack1->addItem("a laptop");
    $backpack1->addItem("a waterbotle");
    $backpack1->addItem("a lunch box");
    $backpack1->displayItems();
    echo "<br><br>";

    // make the backpack full
    $backpack1->addItem("a charger");
    $backpack1->addItem("a tumbler");
    echo "<br><br>";
    $backpack1->displayItems();

    echo "<br><br>======================================<br><br>";
    
    // The second object
    echo "the 2nd backpack is called " . $backpack2->name . " and it is " . $backpack2->size . ".<br><br>";
    $backpack2->zipperStatus(false);
    echo $backpack2->name . $backpack2->zipper . "<br><br>";
    $backpack2->addItem("a toothbrush");
    $backpack2->addItem("shoes");
    $backpack2->addItem("clothes");
    echo "The 1st item in " . $backpack2->name . " is " . $backpack2->getItem(0) . ".<br><br>";

?>
