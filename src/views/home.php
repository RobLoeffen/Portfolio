<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
</head>
<body>
<?php
require 'navbar.php'
?>
<section class="home" id="home">
    <div class="max-width">
        <div class="home-content">
            <div class="text-1">Hallo, mijn naam is</div>
            <div class="text-2">Rob Loeffen</div>
            <div class="text-3">Ik ben een <span class="typing"></span></div>
            <div class="icon">
                <a href="https://github.com/RobLoeffen"><i class="fab fa-github"></i></a
            </div>
        </div>
    </div>
</section>

<section class="about" id="about">
    <div class="max-width">
        <h2 class="title">Over mij</h2>
        <div class="about-content">
            <div class="column left">
                <img src="views/img/about.jpg" alt="">
            </div>
            <div class="column right">
                <div class="text">Wie ben ik?</div>
                <p>Mijn naam is Rob Loeffen. Ik ben een 21 jarige Hbo student op het Windesheim college in Almere. Ik
                    heb hiervoor een jaar Software engineering gestudeerd op De Hogeschool van Amsterdam en heb daar
                    mijn propedeuse behaald. Huidig doe ik een twee jarige associate degree in software development. Ik
                    heb al meerdere projecten gemaakt voor de studies die ik heb gevolgd en heb verder nog geen
                    werkervaring in mijn vakgebied gehad. Wel heb ik aparte banen gehad, wat mij sociaal contact met
                    klanten heeft geleerd. Ik ben gemotiveerd en hardwerkend. Ik ben altijd open om iets nieuws te leren
                    en ben niet bang om vragen te stellen. Hieronder kunt u mijn cv downloadden mocht ik uw interesse
                    hebben gewekt.</p>
                <a href="views/cvDesign.docx" download>Download CV</a>
            </div>
        </div>
    </div>
</section>

<section class="skills" id="skills">
    <div class="max-width">
        <h2 class="title">Ervaringen & vaardigheden</h2>
        <div class="skills-content">
            <div class="column left">
                <div class="text">Mijn ervaringen:</div>
                <p>Ik heb 1 jaar software-engineering gehad op de HvA en mijn propedeuse gehaald. Hier heb ik alvast
                    geleerd websites te bouwen, met git te werken en samen te werken met andere programmeurs. Ik heb
                    geleerd een applicatie op een server te zetten, frameworks leren te hanteren en zowel front als
                    back-end te programmeren. Ook heb ik Object georienteerd geprogrammeerd en ben ik bezig geweest met
                    databases te gebruiken, onderhouden, relaties op te maken en queries te schrijven. Ik heb vooral
                    ervaring in HTML, CSS, Javascript en MySql.</p>
            </div>
            <div class="column right">
                <div class="bars">
                    <div class="info">
                        <span>HTML</span>
                        <span>60%</span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>CSS</span>
                        <span>60%</span>
                    </div>
                    <div class="line css"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>JavaScript</span>
                        <span>40%</span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>PHP</span>
                        <span>1%</span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>MySQL</span>
                        <span>20%</span>
                    </div>
                    <div class="line mysql"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio" id="portfolio">
    <div class="max-width">
        <h2 class="title">Portfolio</h2>
        <div class="portfolio-content">
            <?php foreach ($projects as $project): ?>
            <div class="card" onclick=window.location.href="/index.php?id=<?php echo $project['Projectid'];?>">
                <div class="box">
                    <img src="views/img/OIP.jpg" alt="">
                    <div class="text"><?php echo $project['Title']; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contact formulier</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Verder leren kennen?</div>
                <p>Geinteresseerd geraakt en meer willen weten? Hieronder is mijn mail opgeschreven en mijn naam voor
                    als u contact met mij wilt opleggen. Mocht u het snel willen, kunt u hier rechts mijn formulier
                    invullen en zal ik zo spoedig mogelijk contact opnemen.</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Naam</div>
                            <div class="sub-title">Rob Loeffen</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Almere, Nederland</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">r.loeffen32@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="text">Stuur mij een bericht</div>
                <form onsubmit="window.location.reload()" action="" method="POST"">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" name="name" placeholder="Naam" required>
                        </div>
                        <div class="field email">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" name="subject" placeholder="Ondewerp" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" name="message" placeholder="Bericht.." required></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
require 'footer.php'
?>
<script src="views/script/script.js"></script>
<script src="views/script/index.js"></script>
</body>
</html>
