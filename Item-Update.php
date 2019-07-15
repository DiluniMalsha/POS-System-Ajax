<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/12/2019
 * Time: 10:43 AM
 */
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
    <link rel="stylesheet" href="css/Style.css">
    <title>Pos System/Item/Update Item</title>
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

<a href="Item-View.php">
    <button type="button" class="btn btn-outline-secondary" style="margin: 10px">
        <i class="fas fa-arrow-circle-left"></i>
        View Items
    </button>
</a>

<label class="btn-primary" style="padding: 5px;border: 2px solid white; width: 100%">UPDATE ITEM</label>

<form style="margin: 1%;width: 98%">
    <div class="form-group row">
        <label for="inputCode" class="col-sm-2 col-form-label">Item Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputCode" placeholder="I001">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Item Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" placeholder="Item Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPrice" placeholder="Rs.1000.00">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputAddedDate" class="col-sm-2 col-form-label">Added Date</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputAddedDate" placeholder="2019/01/01">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputTotalQuantity" class="col-sm-2 col-form-label">Total Quantity</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputTotalQuantity" placeholder="100">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputReturned" class="col-sm-2 col-form-label">Returned</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputReturned" placeholder="00">
        </div>
    </div>
</form>

<div style="margin-left: 80%" id="buttens">
    <button type="button" class="btn btn-outline-success">Update</button>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
