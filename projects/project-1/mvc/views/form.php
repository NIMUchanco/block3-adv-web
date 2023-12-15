<form method="POST">
    <input type="text" name="modelName" placeholder="Model Name" value="<?php echo isset($_POST['modelName']) ? $_POST['modelName'] : ""; ?>">
    <select name="brandID" id="brandID">
        <option value="1">Apple</option>
        <option value="2">ASUS</option>
        <option value="3">NVIDIA</option>
        <option value="4">Samsung</option>
        <option value="5">Corsair</option>
    </select>
    <select name="partsTypeID" id="partsTypeID">
        <option value="1">CPU</option>
        <option value="2">RAM</option>
        <option value="3">SSD</option>
        <option value="4">GPU</option>
        <option value="5">Motherboard</option>
    </select>
    <input type="text" name="price" placeholder="Price">
    <select name="compatibilityID" id="compatibilityID">
        <option value="1">AMD</option>
        <option value="2">Intel</option>
        <option value="3">ARM</option>
        <option value="4">AMD & Intel</option>
        <option value="5">AMD & Intel & ARM</option>
    </select>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>