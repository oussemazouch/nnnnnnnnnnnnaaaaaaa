<?php
$i=65;
$machaine="oussemazouch";
$tab=count_chars($machaine,1);
?>
<html>
<head>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly">
</head>
<body>
<table class="table-active table-dark">
    <tr>
        <td>le caractére</td>
        <td> nombre d'occurence </td>
    </tr>
    <?php
    foreach ($tab as $car=>$occ){?>
        <tr>
            <td><?= chr($car) ?> </td>
            <td><?=$occ?></td>
        </tr>
        <?php
    }  ?>
</table>
</body>
</html>
