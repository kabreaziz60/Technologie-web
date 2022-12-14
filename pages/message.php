<?php include_once '../Technologie-web/php/getAllUser.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="../Technologie-web/styles/chat.css">
</head>

<body>
    <div id="container">
        <aside>
            <header>
                <input type="text" placeholder="search">
            </header>
            <ul>
                <?php
                if (isset($_SESSION['data'])) {
                    $user = json_encode($_SESSION['data']);
                } else {
                    $res['error'] = 'Vous devez vous connectez pour accéder a la section message';
                    $_SESSION["res"] = $res;
                    header("Location: ../../Technologie-web");
                }
                while ($rowUser = mysqli_fetch_assoc($result)) {
                    $name = $rowUser['name'];
                    $firstname = $rowUser['firstname'];
                    $id = $rowUser['id'];
                    if ($name !== $_SESSION['data']["name"]) {
                        echo "<li class='userInfo' onclick='getUserMessage($id, $user)'>
                        <img src='../../Technologie-web/assets/img/male_user.svg' alt='user' width=40 height=40/>
                        <div>
                            <h2>$name . $firstname </h2>
                            <h3>
                                <span class='status orange'></span>
                                En ligne
                            </h3>
                        </div>
                    </li>";
                    }
                }

                ?>
            </ul>
        </aside>
        <main>
            <header>
                <img class="userPic" src='../../Technologie-web/assets/img/male_user.svg' alt="user" width=40 height=40 />
                <div class="recepter">
                    <span class="test"></span>
                </div>
            </header>
            <ul id="chat">
                <span class="msg-after-click">Veuillez cliquer sur un utilisateur pour commencer une discussion</span>
            </ul>
            <footer>
                <div class="footer-container">
                    <textarea class="sendInput" placeholder="Votre message"></textarea>
                    <button class="sendBtn" onclick="sendClick()"> <img width="50" height="50" src="../../Technologie-web/assets/img/paper_plane.svg" /></button>

                </div>
            </footer>
        </main>
    </div>

</body>

</html>