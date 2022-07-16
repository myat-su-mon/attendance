<?php include_once 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Attendance - <?php echo $title ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary p-3">
            <a class="navbar-brand text-white" href="index.php">IT Conference</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link active text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="viewrecords.php">View Attendees</a>
                    </li>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ml-auto">
                    <?php
                        if(!isset($_SESSION['userid'])){
                    ?>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="login.php">Login</a>
                    </li>
                    <?php }else{ ?>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php">
                            <span>Hello <?php echo $_SESSION['username']; ?>!</span> Logout
                        </a>
                        </li>
                    <?php } ?>
                </div>
            </div>
        </nav>
    <div class="container">
        