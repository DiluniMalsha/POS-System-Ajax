<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 7/14/2019
 * Time: 8:40 PM
 */
?>

<?php

$id = $_POST["id"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$address = $_POST["address"];
$telephone = $_POST["telephone"];

include "db-connection.php";

if ($connection) {
    $SQL = "update customer set FirstName='$fname',LastName='$lname',Email='$email',Address='$address',Telephone='$telephone' where CID='$id'";
    $result = mysqli_query($connection, $SQL);

    if ($result) {
        echo "Customer Updated";
    } else {
        echo "Customer is not Updated" . "<br>" . mysqli_error($connection);
    }
} else {
    echo mysqli_connect_error();
}

?>

