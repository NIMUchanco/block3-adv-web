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
        // public function showModels() {
        //     $models = $this->model->selectModels();
        //     include 'views/home.php';
        // }
        public function showAll() {
            $models = $this->model->selectAll();
            // var_dump($models);
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
            } else if($this->model->insertModel($modelName, $brandID, $partsTypeID, $price, $compatibilityID)){
                echo "<p>Added models: $modelName, $brandID, $partsTypeID, $price, $compatibilityID</p>";
                header("Location: index.php");
                exit();
            } else {
                echo "<p>Could not add models</p>";
                $this->showForm();
            }
        }

        public function editModel($id) {
            $modelData = $this->model->selectModelID($id);
            if ($modelData) {
                // print_r($modelData);
                include 'views/edit-form.php';
            } else {
                echo "Failed to retrieve model data.";
            }
        }    

        public function updateInfo($modelName, $brandID, $partsTypeID, $price, $compatibilityID, $id) {
            // $model = $this->model->updateModel($modelName, $brandID, $partsTypeID, $price, $compatibilityID, $id);
            // if ($model) {
            //     header("Location: index.php");
            //     exit();
            // } else {
            //     echo "Error updating record";
            // }
            // if (isset($_POST['submitEdit'])) {
            //     $id = $_POST['modelID'];
            //     $modelName = $_POST['modelName'];
            //     $brandID = $_POST['brandID'];
            //     $partsTypeID = $_POST['partsTypeID'];
            //     $price = $_POST['price'];
            //     $compatibilityID = $_POST['compatibilityID'];
                
            if ($this->model->updateModel($modelName, $brandID, $partsTypeID, $price, $compatibilityID, $id)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Failed to update the model.";
            }
        }
            

        public function deleteInfo($id) {
            $model = $this->model->deleteModel($id);
            if ($model) {
                //$this->showAll();
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
    } else if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['modelID'])) {
        $id = $_GET['modelID'];
        $controller->editModel($id);
    } else {
        $controller->showForm();
    }

    // if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['modelID'])) {
    //     $id = $_GET['modelID'];
    //     $controller->editModel($id);
    // }

    if (isset($_POST['submitEdit'])) {
        $modelName = $_POST['modelName'];
        $brandID = $_POST['brandID'];
        $partsTypeID = $_POST['partsTypeID'];
        $price = $_POST['price'];
        $compatibilityID = $_POST['compatibilityID'];
        $id = $_POST['modelID'];
        $controller->updateInfo($modelName, $brandID, $partsTypeID, $price, $compatibilityID, $id);
    }

    if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['modelID'])) {
        $id = $_GET['modelID'];
        $controller->deleteInfo($id);
    }

?>