<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ophalen van gegevens uit het formulier
        $groups = $_POST['groups'];
        $gameType = $_POST['gameType'];

        // Willekeurige code genereren
        $roomCode = strtoupper(substr(md5(rand()), 0, 6)); // 6-letterige code

        // Sla gegevens op in sessie of database (voor eenvoud gebruiken we sessies)
        session_start();
        $_SESSION['roomCode'] = $roomCode;
        $_SESSION['groups'] = $groups;
        $_SESSION['gameType'] = $gameType;

        // Toon de resultaten
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Room Created</title>
            <link rel='stylesheet' href='styles.css'>
        </head>
        <body>
            <div class='container'>
                <h2>Room Created!</h2>
                <p><strong>Groups:</strong> $groups</p>
                <p><strong>Game Type:</strong> $gameType</p>
                <p><strong>Your Room Code:</strong> <span style='font-size:24px;'>$roomCode</span></p>
                <p>Share this code with your colleagues so they can join the room.</p>
                <a href='join.html' class='btn'>Go to Join Page</a>
            </div>
        </body>
        </html>";
    }
?>
