<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 7/14/2019
 * Time: 11:04 PM
 */
?>

<?php

$code=$_POST["code"];
$name=$_POST["name"];
$price=$_POST["price"];
$date=$_POST["date"];
$total=$_POST["total"];
$sold=$_POST["sold"];
$returned=$_POST["returned"];

include "db-connection.php";

if($connection){
    $SQL="update item set Name='$name',Price='$price',AddedDate='$date',Total='$total',Sold='$sold',Returned='$returned' where Code='$code'";
    $result=mysqli_query($connection,$SQL);

    if($result){
        echo "Item Updated";
    }else{
        echo "Item is not Updated"."<br>".mysqli_error($connection);
    }
}else{
    echo mysqli_connect_error();
}


?>
