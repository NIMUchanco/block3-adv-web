<?php

class connectionObject {
    public function __construct(public $host, public $username, public $password, public $database) {
    }
}

class computerModel {
    private $mysqli;
    private $connectionObject;
    public function __construct($connectionObject) {
        $this->connectionObject = $connectionObject;
    }
    public function connect() {
        try {
            $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
            if($mysqli->connect_error) {
                throw new Exception('Could not connect');
            }
            return $mysqli;
        } catch(Exception $e) {
            return false;
        }
    }
    // public function selectModels(){
    //     $mysqli = $this->connect();
    //     if($mysqli) {
    //         $result = $mysqli->query("SELECT * FROM models");
    //         while($row = $result->fetch_assoc()) {
    //             $results[] = $row;
    //         }
    //         $mysqli->close();
    //         return $results;
    //     } else {
    //         return false;
    //     }
    // }
    public function selectAll(){
        $mysqli = $this->connect();
        if($mysqli) {
            $result = $mysqli->query("SELECT models.*, brands.brandName, partsType.partsTypeName, compatibility.compatibilityList FROM models JOIN brands ON models.brandID = brands.brandID JOIN partsType ON models.partsTypeID = partsType.partsTypeID JOIN compatibility ON models.compatibilityID = compatibility.compatibilityID ORDER BY models.modelName ASC;");
            while($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function insertInfo($modelName, $brandID, $partsTypeID, $price, $compatibilityID) {
        $mysqli = $this->connect();
        if($mysqli) {
            $mysqli->query("INSERT INTO models (modelName, brandID, partsTypeID, price, compatibilityID) VALUES ('$modelName', '$brandID', '$partsTypeID', '$price', '$compatibilityID')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}