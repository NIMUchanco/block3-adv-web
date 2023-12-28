<?php

$cellStyle = "border: 1px solid #ddd; padding: 8px; text-align: left;";
$headerCellStyle = "border: 1px solid #ddd; background-color: #f2f2f2; padding: 8px; text-align: left;";
?>

<table style="width: 95%; border-collapse: collapse; margin-top: 20px;">
    <tr>
        <th style="<?php echo $headerCellStyle; ?>">Model Name</th>
        <th style="<?php echo $headerCellStyle; ?>">Brand</th>
        <th style="<?php echo $headerCellStyle; ?>">Part Type</th>
        <th style="<?php echo $headerCellStyle; ?>">Price</th>
        <th style="<?php echo $headerCellStyle; ?>">Compatibility</th>
        <th style="<?php echo $headerCellStyle; ?>"></th>
    </tr>
    <?php
    if($models) {
        foreach($models as $model) {
            echo "<tr>";
            echo "<td style='" . $cellStyle . "'>" . $model['modelName'] . "</td>";
            echo "<td style='" . $cellStyle . "'>" . $model['brandName'] . "</td>";
            echo "<td style='" . $cellStyle . "'>" . $model['partsTypeName'] . "</td>";
            echo "<td style='" . $cellStyle . "'>" . $model['price'] . "</td>";
            echo "<td style='" . $cellStyle . "'>" . $model['compatibilityList'] . "</td>";
            echo "<td style='" . $cellStyle . "'>";
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