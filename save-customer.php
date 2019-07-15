<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/26/2019
 * Time: 3:34 PM
 */
?>

<?php

$id=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$address=$_POST["address"];
$telephone=$_POST["telephone"];

include "db-connection.php";

if($connection){
    $SQL="insert into customer values ('$id','$fname','$lname','$email','$address','$telephone')";
    $result=mysqli_query($connection,$SQL);

    if($result){
        echo "Customer Added";
    }else{
        echo "Customer is not Added"."<br>".mysqli_error($connection);
    }
}else{
    echo mysqli_connect_error();
}

?>

