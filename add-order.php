<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 7/15/2019
 * Time: 9:41 AM
 */
?>

<?php

$oid = $_POST['orderID'];
$date = $_POST['orderDate'];
$cid = $_POST['cid'];
$code = $_POST['code'];
$name = $_POST['name'];
$price = $_POST['unitPrice'];
$qty = $_POST['qty'];
$total=$price*$qty;


include "db-connection.php";

if (!$connection) {
    echo mysqli_connect_error();

} else {
    mysqli_autocommit($connection, false);
    $sql1 = "insert into orders values ('$oid','$date','$cid')";
    $sql2 = "insert into orderdetail values ('$oid','$code','$qty','$total')";
    $customerRESt = mysqli_query($connection, $sql1);
    if ($customerRESt) {
        $itemREST = mysqli_query($connection, $sql2);
        if ($itemREST) {
            mysqli_commit($connection);
            echo "Order Added";
        } else {
            echo "Error". mysqli_error($connection);
            mysqli_rollback($connection);
        }
    } else {
        echo "Order Not Added", mysqli_error($connection);
    }
    mysqli_autocommit($connection, true);

}

?>
