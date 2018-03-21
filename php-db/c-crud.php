<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 2/12/18
 * Time: 9:34 AM
 */

$connection = mysqli_connect("127.0.0.1","root","mysql","php-db","3306");

if (!$connection){
    echo "Could not able to establish the connection";
    die;
}

$result = $connection->query("INSERT INTO customer VALUES (1,'Kasun')");

if ($result){
    echo "Customer has been successfully inserted";
}else{
    echo "Failed to insert the customer";
}

mysqli_close($connection);