<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/12/2019
 * Time: 10:37 AM
 */
?>

<?php
include "db-connection.php";
if ($connection) {
    $SQL = "select * from customer";
    $resultset = mysqli_query($connection, $SQL);

} else {
    echo mysqli_connect_error();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/Style.css">
    <title>Pos System/Customer</title>
    <style>
        #search {
            padding: 10px;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="font-size: 25px">
        <img src="images/POS.png" width="75px">
        POS SYSTEM
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Customer-View.php">Customer <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Item-View.php">Item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Order-View.php">Order</a>
            </li>
        </ul>
    </div>
</nav>

<form class="form-inline my-2 my-lg-0" id="search">
    <input class="form-control mr-sm-2" type="search" placeholder="Search Customers" aria-label="Search">
    <button class="btn btn-outline-primary  my-2 my-sm-0" id="btnSearchCustomer">Search</button>
</form>

<form style="margin: 1%;width: 98%" id="formCustomer">
    <div class="form-group row">
        <label for="inputID" class="col-sm-2 col-form-label">Customer ID</label>
        <div class="col-sm-10">
            <input name="id" type="text" class="form-control" id="inputID" placeholder="Customer ID">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-10">
            <input name="fname" type="text" class="form-control" id="inputFirstName" placeholder="First Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
            <input name="lname" type="text" class="form-control" id="inputLastName" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input name="email" type="text" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Address">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputTelephone" class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-10">
            <input name="telephone" type="text" class="form-control" id="inputTelephone" placeholder="Telephone">
        </div>
    </div>
</form>

<div style="margin-left: 60%" id="buttens">
    <button type="button" class="btn btn-outline-primary" id="btnCustomerSave">Save</button>
    <button type="button" class="btn btn-outline-success" id="btnCustomerUpdate">Update</button>
    <button type="button" class="btn btn-outline-danger" id="btnCustomerDelete">Delete</button>
    <button type="button" class="btn btn-outline-warning" id="btnCustomerClear">Clear</button>
</div>

<hr>

<table class="table table-hover" id="customerTable" style="margin: 1%;width: 98%">
    <thead class="thead-light">
    <tr>
        <th scope="col" id="idCol">Customer ID</th>
        <th scope="col" id="fnameCol">First Name</th>
        <th scope="col" id="lnameCol">Last Name</th>
        <th scope="col" id="emailCol">Email</th>
        <th scope="col" id="addressCol">Address</th>
        <th scope="col" id="telephoneCol">Telephone</th>

    </tr>
    </thead>
    <tbody>
    <?php
    while ($rowdata = mysqli_fetch_row($resultset)) {
        echo "
            <tr>            
            <th scope=\"row\">$rowdata[0]</th>
            <td>$rowdata[1]</td>
            <td>$rowdata[2]</td>       
            <td>$rowdata[3]</td>  
            <td>$rowdata[4]</td>       
            <td>$rowdata[5]</td>        
            </tr>
        ";
    }
    ?>
    </tbody>
</table>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/customer.js"></script>
</body>
</html>
