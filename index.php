<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/12/2019
 * Time: 10:25 AM
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

    <title>Pos System</title>
    <style>
        a{
            color: black;
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
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Customer-View.php">Customer</a>
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

<div class="ui link cards" style="margin: 3%">

    <div class="card" style="margin: 1%">
        <div class="ui violet label" style="font-size: 60px;padding-left: 35%">
            <i class="fas fa-users"></i>
        </div>
        <div class="content">
            <div class="header">Customers</div>
            <div class="description">
                316
            </div>
        </div>
        <button class="ui button">
            <a href="Customer-View.php">
                View
            </a>
        </button>
    </div>


    <div class="card" style="margin: 1%">
        <div class="ui green label" style="font-size: 60px;padding-left: 35%">
            <i class="fas fa-box-open"></i>
        </div>
        <div class="content">
            <div class="header">Items</div>
            <div class="description">
                2746
            </div>
        </div>
        <button class="ui button">
            <a href="Item-View.php">
                View
            </a>
        </button>
    </div>

    <div class="card" style="margin: 1%">
        <div class="ui pink label" style="font-size: 60px;padding-left: 35%">
            <i class="fas fa-cart-plus"></i>
        </div>
        <div class="content">
            <div class="header">Orders</div>
            <div class="description">
                511
            </div>
        </div>
        <button class="ui button">
            <a href="Order-View.php">
                View
            </a>
        </button>
    </div>

    <div class="card" style="margin: 1%">
        <div class="ui teal label" style="font-size: 60px;padding-left: 35%">
            <i class="fas fa-comments"></i>
        </div>
        <div class="content">
            <div class="header">New Messages</div>
            <div class="description">
                189
            </div>
        </div>
        <button class="ui button">
            <a>
                View
            </a>
        </button>
    </div>
</div>

<div style="margin: 10%;margin-top: 5%">
    <h3 class="ui top attached header">
        <i class="fas fa-chart-line" style="font-size: 30px"></i>
        Sales
    </h3>
    <div class="ui attached segment">
        <div class="row">
            <div class="col-lg-6">
                <img src="images/sales.PNG" width="500px">
            </div>
            <div class="col-lg-6">
                <img src="images/2017.PNG" width="500px">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="images/2016.PNG" width="500px">
            </div>
            <div class="col-lg-6">
                <img src="images/2015.PNG" width="500px">
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
