<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    include_once 'models/model.php';
   
    class Controller {
        private $model;
        public function __construct($connection) {
            $this->model = new computerModel($connection);
        }
        // public function showModels() {
        //     $models = $this->model->selectModels();
        //     include 'views/home.php';
        // }
        public function showAll() {
            $models = $this->model->selectAll();
            include 'views/home.php';
        }
        public function showForm() {
            include 'views/form.php';
        }
        public function addInfo() {
            // echo "addInfo function called";
            // var_dump($_POST);

            $modelName = $_POST['modelName'];
            $brandID = $_POST['brandID'];
            $partsTypeID = $_POST['partsTypeID'];
            $price = $_POST['price'];
            $compatibilityID = $_POST['compatibilityID'];
            if (!$modelName || !$brandID || !$partsTypeID || !$price || !$compatibilityID) {
                echo "<p>Missing information</p>";
                $this->showForm();
                return;
            } else if($this->model->insertInfo($modelName, $brandID, $partsTypeID, $price, $compatibilityID)){
                echo "<p>Added models: $modelName, $brandID, $partsTypeID, $price, $compatibilityID</p>";
                header("Location: index.php");
                exit();
            } else {
                echo "<p>Could not add models</p>";
                $this->showForm();
            }
        }
    }

    $connection1 = new connectionObject("localhost:3306", "maiko25_mvc", "s?3v254Ur", "maiko25_mvc_db");
    $controller = new Controller($connection1);


    if(isset($_POST['submit'])) {
        $controller->addInfo();
    } else {
        $controller->showForm();
    }

?>