<?php
    ini_set('display_errors',1);

    include_once("models/model.php");

    class Controller {
        private $model;

        public function __construct($connection) {
            $this->model = new hwModel($connection);
        }

        public function invoke() {
            $homeworks = $this->model->getHomeworks();
            include 'views/home.php';
        }
    }
?>