<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/home.css">
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
                        <span>Sons yam</span>
                    </h1>

                    <p class="mb">
                        Discuter en tout sérénité avec vos camarades de classe
                    </p>

                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="btn mt">Se connecter</a>
                    <a href="#" onclick="document.getElementById('id02').style.display='block'" class="btn mt">S'inscrire</a>
                </div>

                <div class="visual">
                    <img src="../assets/img/s4.png" alt="" />
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
                        <img src="https://raw.githubusercontent.com/programmercloud/pgc-gym/main/img/client1.jpg" alt="" />
                        <h2 class="secondary">Exelent Training</h2>
                        <p class="tertiary">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                            quas voluptatem ad, repudiandae voluptates odio deleniti
                            reiciendis in veniam quidem expedita maxime error fugit. Pariatur
                            quasi sunt aut id. Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Neque, officiis.
                        </p>
                    </div>
                </div>
                <div class="visual">
                    <img src="../assets/img/s3.PNG" alt="" />
                </div>
            </div>
        </div>
        <!-- End Testimonial -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container flex">
                <p class="tertiary">
                    &copy; 2022 Sons yam. All Rights Reserved.
                </p>
            </div>
        </footer>

        <!--   BTN   -->
        <a href="https://www.youtube.com/watch?v=H_rRlMSbarg" class="send-fixer-btn" target="__blank">
            <img width="50" height="50" src="../assets/img/s4.svg" />
        </a>

        <!-- End Footer -->


        <script src="js/script.js"></script>
    </main>
    <footer>

    </footer>
    <h2>Modal Login Form</h2>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

    <!-- login modal -->
    <div id="id01" class="modal">

        <form class="modal-content animate" action="../php/login.php" method="post">
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

        <form class="modal-content animate" action="../php/register.php" method="post">
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
                <input type="password" placeholder="Entre votre email" name="password" required>

                <button type="submit">Inscription</button>
            </div>
        </form>
    </div>
    <script src="../scripts/home.js"></script>

</body>

</html>