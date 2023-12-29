<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<form method="POST" action="?action=edit">
    <input type="hidden" name="modelID" value="<?php echo $modelData['modelID']; ?>">
    <input type="text" name="modelName" value="<?php echo $modelData['modelName']; ?>">
    <select name="brandID" id="brandID">
        <?php
        foreach ($brands as $brand) {
            echo "<option value=\"" . $brand['brandID'] . "\"";
            echo $modelData['brandID'] == $brand['brandID'] ? "selected" : "";
            echo ">" . $brand['brandName'] . "</option>";
        }
        ?>
    </select>
    <select name="partsTypeID" id="partsTypeID">
        <?php
        foreach ($partsTypes as $partsType) {
            echo "<option value=\"" . $partsType['partsTypeID'] . "\"";
            echo $modelData['partsTypeID'] == $partsType['partsTypeID'] ? "selected" : "";
            echo ">" . $partsType['partsTypeName'] . "</option>";
        }
        ?>
    </select>
    <input type="text" name="price" value="<?php echo $modelData['price']; ?>">
    <select name="compatibilityID" id="compatibilityID">
        <?php
        foreach ($compatibilities as $compatibility) {
            echo "<option value=\"" . $compatibility['compatibilityID'] . "\"";
            echo $modelData['compatibilityID'] == $compatibility['compatibilityID'] ? "selected" : "";
            echo ">" . $compatibility['compatibilityList'] . "</option>";
        }
        ?>
    </select>
    <input type="text" name="stockNum" value="<?php echo $modelData['stockNum']; ?>">
    <input type="submit" name="submitEdit" value="Save Changes">
    <input type="button" onclick="window.location.href='index.php';" value="Cancel">
</form>