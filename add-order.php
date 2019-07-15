<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 7/15/2019
 * Time: 9:41 AM
 */
?>

<?php


$code = $_POST['itemCode'];
$name = $_POST['itemName'];
$price = $_POST['unitePrice'];
$qty = $_POST['qty'];
$total=$price*$qty;


$oid = $_POST['orderID'];
$date = $_POST['orderDate'];
$cid = $_POST['cid'];

include "db-connection.php";

if (!$connection) {
    echo mysqli_connect_errno();

} else {
    mysqli_autocommit($connection, false);
    $sql1 = "insert into orders values ('$oid','$date','$cid')";
    $sql2 = "insert into orderdetails values ('$oid','$code','$qty','$total')";
    $customerRESt = mysqli_query($connection, $sql1);
    if ($customerRESt) {
        echo "Order Added";
        $itemREST = mysqli_query($connection, $sql2);
        if ($itemREST) {
            mysqli_commit($connection);
        } else {
            mysqli_rollback($connection);
            echo "item not add", mysqli_errno($connection);
            mysqli_error($connection);
        }
    } else {
        echo "Order Not Added", mysqli_error($connection);
    }
    mysqli_autocommit($connection, true);

    mysqli_close($connection);

}

?>
