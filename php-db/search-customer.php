<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 2/12/18
 * Time: 10:26 AM
 */

$cid = $_GET["cid"];

if (empty($cid)){
    die;
}

$connection = mysqli_connect("127.0.0.1","root","mysql","php-db","3306");

if (!$connection){
    echo "Could not able to establish the connection";
    die;
}

$resultset = $connection->query("SELECT * FROM customer WHERE id=$cid");

$rowData = $resultset->fetch_row();

echo "Customer ID : ", $rowData[0], "<br>";
echo "Customer Name : ", $rowData[1], "<br>";
?>
<p>
    Return to <a href="search-customer.html">Search</a> again
</p>
