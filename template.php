<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bienvenue chez Sultana</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/flexslider.css" type="text/css">
    
    <!-- JS Flexslider -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="public/js/jquery.flexslider.js"></script>
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });
    </script>
</head>

<body>

    <div class="container">
        <!--HEADER-->
        <header>
            <nav class="nav_client">
                <ul>
                    <li>
                        <?php if(isset($_SESSION["logged_in"]) && $_SESSION['logged_in'] == true): ?>
                            <a href="deconnection.php"><i class="fas fa-sign-out-alt"></i></a>
                        <?php else: ?>
                            <a href="login.php"><i class="fas fa-user"></i></a>
                        <?php endif; ?>
                    </li>
                </ul>
            </nav>

            <div class="logo">
                <a href="index.php"><img src="public/images/logo/logo_sultana.jpg" alt="logo"/></a>
            </div>

            <nav class="navigation">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="newCollection.php">Nouvelle collection</a></li>
                    <li><a href="clothes.php">Vêtements</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <!--FIN HEADER-->

        <!--MAIN-->
        <main>
            <?php include $content; ?>
        </main>
        <!--FIN MAIN-->

        <!--FOOTER-->
        <footer>
            <section class="info">

                <article class="suivez_nous">
                    <h3>Suivez-Nous</h3>
                    <a href="https://www.instagram.com/sultana_paris_75/" target="_blank"><i class="fas fa-caret-right"> Instagram</i></a>
                    <a href="https://www.facebook.com/profile.php?id=100051722821573" target="_blank"><i class="fas fa-caret-right"> Facebook</i></a>
                <a href="https://twitter.com/explore" target="_blank"><i class="fas fa-caret-right"> Twitter</i></a>
                </article>
                <article class="notre_societe">
                    <h3>Notre Société</h3>
                    <a href="contact.php"><i class="fas fa-caret-right"> Conctatez-Nous</i></a>
                    <i class="fas fa-caret-right"> Livraison</i>
                    <a href="contact.php"><i class="fas fa-caret-right"> Boutique</i></a>
                </article>

                <article class="information">
                    <h3>Informations</h3>
                    <i class="fas fa-phone-square-alt"> Appelez-nous au :06.16.27.98.02</i>
                    <i class="fas fa-envelope"> sultana_paris@outlook.fr</i>
                    <a href='login.php'><i class="fas fa-caret-right"> Mon compte</i></a>
                </article>
            </section>
            <div id="scrolltotop"><div></div></div>

        </footer>
        <!--FIN FOOTER-->
    </div>

    <script>
        $('#scrolltotop').click(function(){
	        $('html,body').animate({scrollTop: 0}, 'slow');
        });
        
        $(window).scroll(function(){
	        if ($(window).scrollTop() < 500) {
		        $('#scrolltotop').fadeOut();
	        }else{
		        $('#scrolltotop').fadeIn();
	        }
        });
    </script>

</body>
</html>
