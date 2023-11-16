<?php 
require_once "app/config/config.php"; 
require_once "app/classes/User.php";
$user = new User();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Shop</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container">
                <a class="navbar-brand" href="#">Shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                            <?php if(!$user->is_logged()) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php">
                                   Cart 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="orders.php">My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <?php if(isset($_SESSION['message'])) : ?>
                    <div class="alert alert-success <?php echo $_SESSION['message']['type']; ?> alert-dismissible" role="alert">
                        <?php
                        echo $_SESSION['message']['text'];
                        unset($_SESSION['message']);
                        ?>
                    </div>
            <?php endif; ?>

