<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Technologie-web/styles/home.css">
    <title>Document</title>
</head>

<body class="home-container">
    <?php
    if ($_SESSION && $_SESSION['res']) {
        $msg = $_SESSION['res'];
        foreach ($msg as $x => $val) {
            echo "<div class='alert $x'>
            <span class='closebtn' onclick='closeAlert()'>&times;</span>
           $val
            </div>";
        }
    }
    session_destroy();
    ?>
    <main>
        <header class="header">
            <div class="container flex">
                <div class="text">
                    <h1 class="mb">
                        Bienvenue sur <br />
                        <span>Sonsyam</span>
                    </h1>

                    <p class="mb">
                        Discuter en tout sérénité avec vos camarades de classe
                    </p>

                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="btn mt">Connexion</a>
                    <a href="#" onclick="document.getElementById('id02').style.display='block'" class="btn mt">Inscription</a>
                </div>

                <div class="visual">
                    <img src="../../Technologie-web/assets/img/s4.png" alt="" />
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Testimonial -->
        <div class="section" id="testimonial">
            <div class="container flex">
                <div class="text">
                    <h2 class="primary">
                        Message envoyer
                    </h2>

                    <br />
                    <br />
                    <br />

                    <div class="client">
                        <img src="../../Technologie-web/assets/img//user.svg" alt="" />
                        <h2 class="secondary">Abdoul Kabre</h2>
                        <p class="tertiary">
                            je suis Abdoul kabré etudiant en 2ème année a l'IFOAD. Ravie de rejoindre se reseau social
                        </p>
                    </div>
                </div>
                <div class="visual">
                    <img src="../../Technologie-web/assets/img/s3.PNG" alt="" />
                </div>
            </div>
        </div>
        <!-- End Testimonial -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container flex">
                <p class="tertiary">
                    &copy; 2022 Sonsyam. All Rights Reserved.
                </p>
            </div>
        </footer>

        <!--   BTN   -->
        <a href="../../Technologie-web/pages/message.php" class="send-fixer-btn">
            <img width="50" height="50" src="../../Technologie-web/assets/img/s4.svg" />
        </a>

        <!-- End Footer -->


        <script src="js/script.js"></script>
    </main>
    <footer>

    </footer>


    <!-- login modal -->
    <div id="id01" class="modal">

        <form class="modal-content animate" action="../../Technologie-web/php/login.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
            </div>

            <div class="container">
                <h3 class="auth-title">Connexion</h3>
                <label for="uname"><b>Email</b></label>
                <input type="email" placeholder="Entre votre email" name="email" required>

                <label for="psw"><b>Mot de passe</b></label>
                <input type="password" placeholder="Entre votre mot de passe" name="password" required>

                <button type="submit">Connexion</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Se rappel de moi
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuel</button>
                <span class="psw">Mot de passe oublie <a href="#">ici?</a></span>
            </div>
        </form>
    </div>


    <!-- register modal -->
    <div id="id02" class="modal">

        <form class="modal-content animate" action="../../Technologie-web/php/register.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
            </div>

            <div class="container">
                <h3 class="auth-title">Inscription</h3>
                <label for="uname"><b>Nom</b></label>
                <input type="text" placeholder="Entre votre nom" name="name" required>

                <label for="psw"><b>Prenom</b></label>
                <input type="text" placeholder="Entre votre prenom" name="firstname" required>

                <label for="psw"><b>Email</b></label>
                <input type="email" placeholder="Entre votre email" name="email" required>

                <label for="psw"><b>Mot de passe</b></label>
                <input type="password" placeholder="Entre votre Mot de passe" name="password" required>

                <button type="submit">Inscription</button>
            </div>
        </form>
    </div>
    <script src="../../Technologie-web/scripts/home.js"></script>

</body>

</html>