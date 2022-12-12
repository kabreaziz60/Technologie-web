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
                if (isset($_SESSION['data'])) $user = json_encode($_SESSION['data']);
                while ($rowUser = mysqli_fetch_assoc($result)) {
                    $name = $rowUser['name'];
                    $firstname = $rowUser['firstname'];
                    $id = $rowUser['id'];
                    echo "<li onclick='getUserMessage($id, $user)'>
                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg' alt=''>
                    <div>
                        <h2>$name . $firstname </h2>
                        <h3>
                            <span class='status orange'></span>
                            offline
                        </h3>
                    </div>
                </li>";
                }

                ?>
            </ul>
        </aside>
        <main>
            <header>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
                <div class="recepter">
                    <span class="test"></span>
                </div>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_star.png" alt="">
            </header>
            <ul id="chat">

            </ul>
            <footer>
                <div class="footer-container">
                    <textarea class="sendInput" placeholder="Type your message"></textarea>
                    <!-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_picture.png" alt="">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_file.png" alt=""> -->
                    <button class="sendBtn" onclick="sendClick()">Send</button>

                </div>
            </footer>
        </main>
    </div>

</body>

</html>