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

    public function selectAll(){
        $mysqli = $this->connect();
        if($mysqli) {
            $result = $mysqli->query("SELECT models.*, brands.brandName, partsType.partsTypeName, compatibility.compatibilityList FROM models JOIN brands ON models.brandID = brands.brandID JOIN partsType ON models.partsTypeID = partsType.partsTypeID JOIN compatibility ON models.compatibilityID = compatibility.compatibilityID ORDER BY models.modelID DESC;");
            while($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();

            if (isset($results)) {
                return $results;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function selectBrand(){
        $mysqli = $this->connect();
        if($mysqli) {
            $result = $mysqli->query("SELECT * FROM brands");
            while($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function selectPartsType(){
        $mysqli = $this->connect();
        if($mysqli) {
            $result = $mysqli->query("SELECT * FROM partsType");
            while($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }
    
    public function selectCompatibility(){
        $mysqli = $this->connect();
        if($mysqli) {
            $result = $mysqli->query("SELECT * FROM compatibility");
            while($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function insertModel($modelName, $brandID, $partsTypeID, $price, $compatibilityID, $stockNum) {
        $mysqli = $this->connect();
        if($mysqli) {
            $mysqli->query("INSERT INTO models (modelName, brandID, partsTypeID, price, compatibilityID, stockNum) VALUES ('$modelName', '$brandID', '$partsTypeID', '$price', '$compatibilityID', '$stockNum')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function insertBrand($brandName) {
        $mysqli = $this->connect();
        if($mysqli) {
            $mysqli->query("INSERT INTO brands (brandName) VALUES ('$brandName')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function insertPartsType($partsTypeName) {
        $mysqli = $this->connect();
        if($mysqli) {
            $mysqli->query("INSERT INTO partsType (partsTypeName) VALUES ('$partsTypeName')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function selectModelID($id){
        $mysqli = $this->connect();
        if($mysqli) {
            $result = $mysqli->query("SELECT * FROM models WHERE modelID='$id'");
            $mysqli->close();
            return $result->fetch_assoc();          
        } else {
            return false;
        }
    }

    public function updateModel($modelName, $brandID, $partsTypeID, $price, $compatibilityID, $id, $stockNum) {
        $mysqli = $this->connect();
        if($mysqli) {
            $mysqli->query("UPDATE models SET modelName='$modelName', brandID='$brandID', partsTypeID='$partsTypeID', price='$price', compatibilityID='$compatibilityID', stockNum='$stockNum' WHERE modelID='$id'");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function deleteModel($id) {
        $mysqli = $this->connect();
        if($mysqli) {
            $mysqli->query("DELETE FROM models WHERE models.modelID='$id'");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}