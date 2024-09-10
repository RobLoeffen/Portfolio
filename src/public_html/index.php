<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<!--    --><?php
//    require 'navbar.php'
//    ?>
</head>
<body>
<nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
        <ul class="menu">
            <li><a href="#home" class="menu-btn">Home</a></li>
            <li><a href="#about" class="menu-btn">Over mij</a></li>
            <li><a href="#" class="menu-btn">Vaardigheden</a></li>
            <li><a href="#" class="menu-btn">Ervaringen</a></li>
            <li><a href="#" class="menu-btn">Portfolio</a></li>
            <li><a href="#" class="menu-btn">Contact</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>

<section class="home" id="home">
    <div class="max-width">
        <div class="home-content">
            <div class="text-1">Hallo, mijn naam is</div>
            <div class="text-2">Rob Loeffen</div>
            <div class="text-3">en ik ben een <span class="typing"></span></div>
        </div>
    </div>
</section>


<?php
require 'footer.php'
?>
<script src="script/script.js"></script>
</body>
</html>
