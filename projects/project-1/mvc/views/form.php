<h3 style="margin-top:2em;">Enter new entry</h3>
<form method="POST">
    <input type="text" name="modelName" placeholder="Model Name" value="<?php echo isset($_POST['modelName']) ? $_POST['modelName'] : ""; ?>">
    <select name="brandID" id="brandID">
        <option value="">-- Select Brand Name --</option>
        <?php
        foreach ($brands as $brand) {
            echo "<option value=\"" . $brand['brandID'] . "\">" . $brand['brandName'] . "</option>";
        }
        ?>
    </select>
    <select name="partsTypeID" id="partsTypeID">
        <option value="">-- Select Parts Type --</option>
        <?php
        foreach ($partsTypes as $partsType) {
            echo "<option value=\"" . $partsType['partsTypeID'] . "\">" . $partsType['partsTypeName'] . "</option>";
        }
        ?>
    </select>
    <input type="text" name="price" placeholder="Price">
    <select name="compatibilityID" id="compatibilityID">
        <option value="">-- Select Compatibility --</option>
        <?php
        foreach ($compatibilities as $compatibility) {
            echo "<option value=\"" . $compatibility['compatibilityID'] . "\">" . $compatibility['compatibilityList'] . "</option>";
        }
        ?>
    </select>
    <input type="text" name="stockNum" placeholder="Stock Number">
    <input type="submit" name="submit" value="Submit">
    <input type="button" onclick="window.location.href='index.php';" value="Clear">
</form>

<h3 style="margin-top:2em;">Add more selections</h3>
<form method="POST">
    <input type="text" name="brandName" placeholder="Brand Name" value="<?php echo isset($_POST['brandName']) ? $_POST['brandName'] : ""; ?>">
    <input type="text" name="partsTypeName" placeholder="Parts Type" value="<?php echo isset($_POST['partsTypeName']) ? $_POST['partsTypeName'] : ""; ?>">
    <input type="submit" name="add" value="Add">
    <input type="reset" name="reset" value="Clear">
</form>