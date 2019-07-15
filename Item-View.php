<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/12/2019
 * Time: 10:39 AM
 */
?>

<?php
include "db-connection.php";
if ($connection) {
    $SQL = "select * from Item";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/Style.css">
    <title>Pos System/Item</title>
    <style>
        #search{
            padding: 10px;
        }
        #add{
            margin-left: 60%;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"  style="font-size: 25px">
        <img src="images/POS.png" width="75px">
        POS SYSTEM
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Customer-View.php">Customer</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Item-View.php">Item <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Order-View.php">Order</a>
            </li>
        </ul>
    </div>
</nav>

<form class="form-inline my-2 my-lg-0" id="search">
    <input class="form-control mr-sm-2" type="search" placeholder="Search Items" aria-label="Search">
    <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit">Search</button>
</form>


<form style="margin: 1%;width: 98%" id="formItem">
    <div class="form-group row">
        <label for="inputCode" class="col-sm-2 col-form-label">Item Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputCode" placeholder="I001" name="code">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Item Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" placeholder="Item Name" name="name">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPrice" placeholder="Rs.1000.00" name="price">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputAddedDate" class="col-sm-2 col-form-label">Added Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="inputAddedDate" name="date">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputTotalQuantity" class="col-sm-2 col-form-label">Total Quantity</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputTotalQuantity" placeholder="100" name="total">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputSold" class="col-sm-2 col-form-label">Sold Quantity</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputSold" placeholder="100" name="sold">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputReturned" class="col-sm-2 col-form-label">Returned</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputReturned" placeholder="00" name="returned">
        </div>
    </div>
</form>

<div style="margin-left: 60%" id="buttens">
    <button type="button" class="btn btn-outline-primary" id="btnItemSave">Save</button>
    <button type="button" class="btn btn-outline-success" id="btnItemUpdate">Update</button>
    <button type="button" class="btn btn-outline-danger" id="btnItemDelete">Delete</button>
    <button type="button" class="btn btn-outline-warning" id="btnItemClear">Clear</button>
</div>

<hr>

<table class="table table-hover"style="margin: 1%;width: 98%">
    <thead class="thead-light">
    <tr>
        <th scope="col">Item Code</th>
        <th scope="col">Item Name</th>
        <th scope="col">Price</th>
        <th scope="col">Added Date</th>
        <th scope="col">Total</th>
        <th scope="col">Sold</th>
        <th scope="col">Returned</th>
        <th scope="col">Left</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($rowdata = mysqli_fetch_row($resultset)) {
        $left=($rowdata[4]-($rowdata[6]+$rowdata[5]));
        echo "<tr>       
        <th scope=\"row\">$rowdata[0]</th>
        <td>$rowdata[1]</td>
        <td>$rowdata[2]</td>       
        <td>$rowdata[3]</td>  
        <td>$rowdata[4]</td>       
        <td>$rowdata[5]</td>   
        <td>$rowdata[6]</td>                     
        <td>$left</td>        
    </tr>";
    }
    ?>
    </tbody>
</table>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/item.js"></script>
</body>
</html>
