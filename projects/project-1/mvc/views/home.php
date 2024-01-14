<?php
include_once 'views/header.php';
?>
<h3>Joined Table</h3>
<table>
    <tr>
        <th>Model Name</th>
        <th>Brand</th>
        <th>Part Type</th>
        <th>Price</th>
        <th>Compatibility</th>
        <th>Stock Number</th>
        <th></th>
    </tr>
    <?php
    if($models) {
        foreach($models as $model) {
            echo "<tr>";
            echo "<td>" . $model['modelName'] . "</td>";
            echo "<td>" . $model['brandName'] . "</td>";
            echo "<td>" . $model['partsTypeName'] . "</td>";
            echo "<td>" . "$" . $model['price'] . "</td>";
            echo "<td>" . $model['compatibilityList'] . "</td>";
            echo "<td>" . $model['stockNum'] . "</td>";
            echo "<td>";
            echo "<a href='?action=edit&modelID=" . $model['modelID'] . "'>Edit</a>";
            echo " | ";
            echo "<a href='?action=delete&modelID=" . $model['modelID'] . "'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo 'No models found';
    }
    ?>
</table>