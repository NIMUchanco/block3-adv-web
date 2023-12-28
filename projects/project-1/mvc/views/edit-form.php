<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<form method="POST" action="?action=edit">
    <input type="hidden" name="modelID" value="<?php echo $modelData['modelID']; ?>">
    <input type="text" name="modelName" value="<?php echo $modelData['modelName']; ?>">
    <select name="brandID" id="brandID">
        <option value="1" <?php echo $modelData['brandID'] == 1 ? "selected" : ""; ?>>Apple</option>
        <option value="2" <?php echo $modelData['brandID'] == 2 ? "selected" : ""; ?>>ASUS</option>
        <option value="3" <?php echo $modelData['brandID'] == 3 ? "selected" : ""; ?>>NVIDIA</option>
        <option value="4" <?php echo $modelData['brandID'] == 4 ? "selected" : ""; ?>>Samsung</option>
        <option value="5" <?php echo $modelData['brandID'] == 5 ? "selected" : ""; ?>>Corsair</option>
    </select>
    <select name="partsTypeID" id="partsTypeID">
        <option value="1" <?php echo $modelData['partsTypeID'] == 1 ? "selected" : ""; ?>>CPU</option>
        <option value="2" <?php echo $modelData['partsTypeID'] == 2 ? "selected" : ""; ?>>RAM</option>
        <option value="3" <?php echo $modelData['partsTypeID'] == 3 ? "selected" : ""; ?>>SSD</option>
        <option value="4" <?php echo $modelData['partsTypeID'] == 4 ? "selected" : ""; ?>>GPU</option>
        <option value="5" <?php echo $modelData['partsTypeID'] == 5 ? "selected" : ""; ?>>Motherboard</option>
    </select>
    <input type="text" name="price" value="<?php echo $modelData['price']; ?>">
    <select name="compatibilityID" id="compatibilityID">
        <option value="1" <?php echo $modelData['compatibilityID'] == 1 ? "selected" : ""; ?>>AMD</option>
        <option value="2" <?php echo $modelData['compatibilityID'] == 2 ? "selected" : ""; ?>>Intel</option>
        <option value="3" <?php echo $modelData['compatibilityID'] == 3 ? "selected" : ""; ?>>ARM</option>
        <option value="4" <?php echo $modelData['compatibilityID'] == 4 ? "selected" : ""; ?>>AMD & Intel</option>
        <option value="5" <?php echo $modelData['compatibilityID'] == 5 ? "selected" : ""; ?>>AMD & Intel & ARM</option>
    </select>
    <input type="submit" name="submitEdit" value="Save Changes">
    <input type="button" onclick="window.location.href='index.php';" value="Cancel">
</form>