<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 2/12/18
 * Time: 11:44 AM
 */

$connection = mysqli_connect("127.0.0.1","root","mysql","php-db","3306");

if (!$connection){
    echo "Could not able to establish the connection";
    die;
}

$connection->autocommit(false);

$result = $connection->query("INSERT INTO customer VALUES (5,'Sunil3')");

if ($result){

    $result = $connection->query("INSERT INTO `order` VALUES(2,'2018-02-12')");

    if ($result){
        echo "Wadea goda";
        $connection->commit();
    }else{
        echo "Wadea bageata";
        $connection->rollback();
    }

}else{
    echo "Wadea kachal";
    $connection->rollback();
}

$connection->autocommit(true);

mysqli_close($connection);