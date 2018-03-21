<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 2/12/18
 * Time: 10:06 AM
 */

$id = $_POST["cid"];
$name = $_POST["cname"];

$connection = mysqli_connect("127.0.0.1","root","mysql","php-db","3306");

if (!$connection){
    echo "Could not able to establish the connection";
    die;
}

$result = $connection->query("INSERT INTO customer VALUES ($id,'$name')");

if ($result){
    echo "Customer has been successfully added" , "<br>";
}else{
    echo "Failed to save the customer";
}
?>
<p>
    Return to <a href="add-customer.html">Home</a>
</p>
