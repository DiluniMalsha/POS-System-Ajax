<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/28/2019
 * Time: 12:20 PM
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
    $SQL="insert into item values ('$code','$name','$price','$date','$total','$sold','$returned')";
    $result=mysqli_query($connection,$SQL);

    if($result){
        echo "Item Added";
    }else{
        echo "Item is not Added"."<br>".mysqli_error($connection);
    }
}else{
    echo mysqli_connect_error();
}

?>
