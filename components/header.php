<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Technologie-web/styles/header.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-container container">
                <input type="checkbox" name="" id="">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li><a href="../../Technologie-web">Accueil</a></li>
                    <li><a href="../../Technologie-web/pages/task.php">Tâches</a></li>
                    <?php
                    if (isset($_SESSION["action"]))
                        echo "<li><a href='../../Technologie-web/php/deconnexion.php'>Déconnxion</a></li>"
                    ?>  
                </ul>
                <h1 class="logo">Tâches</h1>
            </div>
        </nav>
        <script src="../../Technologie-web/scripts/task.js"></script>
    </header>
</body>

</html>