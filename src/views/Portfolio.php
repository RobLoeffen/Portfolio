<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/project.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
<?php
require 'navbar.php';
?>

<section class="project" id="project">
    <div class="max-width">
        <div class="project-content">
            <div class="title"><?php echo htmlspecialchars($projects['Title']); ?></div>
            <div class="images">
                <img src="views/img/OIP.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="project-description" id="project-description">
    <div class="max-width">
        <h2 class="title">Informatie en gebruikte technieken</h2>
        <div class="project-description-content">
            <div class="text">Informatie:</div>
            <p><?php echo htmlspecialchars($projects["Description"]) ?></p>
        </div>
    </div>
</section>

<?php
require 'footer.php'
?>
<script src="views/script/script.js"></script>
</body>
</html>
