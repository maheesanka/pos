<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 2/12/18
 * Time: 10:44 AM
 */

$connection = mysqli_connect("127.0.0.1","root","mysql","php-db","3306");

if (!$connection){
    echo "Could not able to establish the connection";
    die;
}

$resultset = $connection->query("SELECT * FROM customer");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View All Customers</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            margin-top: 10px;
        }
    </style>
</head>
<body>
<h1>View All Customers</h1>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
        </tr>
    </thead>
    <tbody>
    <?php

    while($rowData = $resultset->fetch_row()){
//        echo "<tr>";
//        echo "<td>$rowData[0]</td>";
//        echo "<td>$rowData[1]</td>";
//        echo "</tr>";

        ?>


    <tr>
        <td><?= $rowData[0] ?></td>
        <td><?= $rowData[1] ?></td>
    </tr>

    <?php

    }

    mysqli_free_result($resultset);

    mysqli_close($connection);

    ?>
    </tbody>
</table>

</body>
</html>
