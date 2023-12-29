<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    include_once 'models/model.php';
    include_once '_includes/config.php';
   
    class Controller {
        private $model;
        public function __construct($connection) {
            $this->model = new computerModel($connection);
        }

        public function showAll() {
            $models = $this->model->selectAll();
            // var_dump($models);
            include 'views/home.php';
        }

        public function getBrand() {
            return $this->model->selectBrand();
        }

        public function getPartsType() {
            return $this->model->selectPartsType();
        }

        public function getCompatibility() {
            return $this->model->selectCompatibility();
        }

        public function showForm() {
            $brands = $this->getBrand();
            $partsTypes = $this->getPartsType();
            $compatibilities = $this->getCompatibility();
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
            $stockNum = $_POST['stockNum'];
            if (!$modelName || !$brandID || !$partsTypeID || !$price || !$compatibilityID || !$stockNum) {
                echo "<p>Missing information</p>";
                return;
            } else if($this->model->insertModel($modelName, $brandID, $partsTypeID, $price, $compatibilityID, $stockNum)){
                header("Location: index.php");
                exit();
            } else {
                echo "<p>Could not add models</p>";
            }
        }

        public function addBrand() {
            $brandName = $_POST['brandName'];
            if (!$brandName) {
                echo "<p>Missing Brand Name</p>";
            } else if($this->model->insertBrand($brandName)){
                header("Location: index.php");
            } else {
                echo "<p>Could not add brand</p>";
            }
        }

        public function addPartsType() {
            $partsTypeName = $_POST['partsTypeName'];
            if (!$partsTypeName) {
                echo "<p>Missing Parts Type</p>";
            } else if($this->model->insertPartsType($partsTypeName)){
                header("Location: index.php");
            } else {
                echo "<p>Could not add parts type</p>";
            }
        }

        public function getEditModelID($id) {
            $modelData = $this->model->selectModelID($id);
            $brands = $this->getBrand();
            $partsTypes = $this->getPartsType();
            $compatibilities = $this->getCompatibility();
            if ($modelData) {
                // print_r($modelData);
                include 'views/edit-form.php';
            } else {
                echo "Failed to retrieve model data.";
            }
        }    

        public function updateInfo($modelName, $brandID, $partsTypeID, $price, $compatibilityID, $id, $stockNum) {
            if ($this->model->updateModel($modelName, $brandID, $partsTypeID, $price, $compatibilityID, $id, $stockNum)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Failed to update the model.";
            }
        }
            

        public function deleteInfo($id) {
            $model = $this->model->deleteModel($id);
            if ($model) {
                header("Location: index.php");
                exit();
            } else {
                echo "Error deleting record";
            }
        }
    }

    $connection = new ConnectionObject($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['database']);
    $controller = new Controller($connection);


    if(isset($_POST['submit'])) {
        $controller->addInfo();
        $controller->showForm();
    } else if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['modelID'])) {
        $id = $_GET['modelID'];
        $controller->getEditModelID($id);
    } else {
        $controller->showForm();
    }

    if (isset($_POST['add'])) {
        $controller->addBrand();
        $controller->addPartsType();
    }

    if (isset($_POST['submitEdit'])) {
        $modelName = $_POST['modelName'];
        $brandID = $_POST['brandID'];
        $partsTypeID = $_POST['partsTypeID'];
        $price = $_POST['price'];
        $compatibilityID = $_POST['compatibilityID'];
        $id = $_POST['modelID'];
        $stockNum = $_POST['stockNum'];
        $controller->updateInfo($modelName, $brandID, $partsTypeID, $price, $compatibilityID, $id, $stockNum);
    }

    if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['modelID'])) {
        $id = $_GET['modelID'];
        $controller->deleteInfo($id);
    }

?>