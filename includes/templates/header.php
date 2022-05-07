<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Rendre All To Zero -->
    <link rel="stylesheet" href="<?php echo $css?>/Normalize.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $css?>/All.min.css">
    <!-- My Style <?php echo $css?> ../../layout/css -->
    <link rel="stylesheet" href="<?php echo $css?>/Style.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title><?php echo $title ;?></title>
</head>
<body>
    <div class="head">
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
        <div class="sead">
            <div class="phone">
                <img src="images/phone_icon.png" alt="">
                <p>0770081966</p>
            </div>
            <div class="mail">
                <img src="images/mail_icon.png" alt="">
                <p>Test@Gmail.com</p>
            </div>
            <div class="search">
                <img src="images/search_icon.png" alt="">
            </div>            
        </div>
        <div class="menu">
            <h3><a href="">Menu</a> </h3>
            <ul>
                <li><a href="<?php echo $lien;?>index.php">Home</a></li>
                <li><a href="<?php echo $lien;?>about.php">About</a></li>
                <li><a href="<?php echo $lien;?>service.php">Service</a></li>
                <li><a href="<?php echo $lien;?>pricing.php">Pricing</a></li>
                <li><a href="<?php echo $lien;?>our_barbers.php">Our Barbers</a></li>
                <li><a href="<?php echo $lien;?>contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
    

<?php
?>