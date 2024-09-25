<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $inputCode = strtoupper(trim($_POST['roomCode']));
        $roomCode = $_SESSION['roomCode'];

        if ($inputCode === $roomCode) {
            echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Joined Room</title>
                <link rel='stylesheet' href='styles.css'>
            </head>
            <body>
                <div class='container'>
                    <h2>Welcome to the Room!</h2>
                    <p>You have successfully joined the room with code: $roomCode</p>
                    <p><strong>Game Type:</strong> {$_SESSION['gameType']}</p>
                    <p><strong>Number of Groups:</strong> {$_SESSION['groups']}</p>
                </div>
            </body>
            </html>";
        } else {
            echo "<p>Invalid Room Code. Please try again.</p>";
        }
    }
?>
