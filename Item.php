<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/12/2019
 * Time: 10:35 AM
 */
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
              integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Style.css">
        <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
        <script
                src="https://code.jquery.com/jquery-3.1.1.min.js"
                integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
                crossorigin="anonymous"></script>
        <script src="js/semantic.min.js"></script>

    <title>Pos System/Item/Add new Item</title>
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

<label class="btn-primary" style="padding: 5px;border: 2px solid white; width: 100%">NEW ITEM</label>

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
        <label for="inputReturned" class="col-sm-2 col-form-label">Returned</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputReturned" placeholder="00" name="returned">
        </div>
    </div>
</form>

<div style="margin-left: 60%" id="buttens">
    <button type="button" class="btn btn-outline-primary" id="btnItemSave">Save</button>
    <button type="button" class="btn btn-outline-success">Update</button>
    <button type="button" class="btn btn-outline-danger">Delete</button>
    <button type="button" class="btn btn-outline-warning">Clear</button>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/item.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
