<?php
session_start(); // Start de sessie

// Debugging: Bekijk of sessie-variabelen zijn ingesteld
if (!isset($_SESSION['roomCode'], $_SESSION['gameType'], $_SESSION['groups'])) {
    die("Session variables not set. Make sure the room is created first.");
}

// Controleer of het een POST-verzoek is
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Haal de room code op en zet hem in hoofdletters
    $enteredCode = strtoupper(trim($_POST['roomCode']));

    // Controleer of de ingevulde code overeenkomt met de sessiecode
    if ($_SESSION['roomCode'] === $enteredCode) {
        // Room code is correct, toon succespagina
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Room Joined</title>
            <link rel='stylesheet' href='css/styles.css'>
        </head>
        <body>
            <div class='container'>
                <h2>Welcome to the Room!</h2>
                <p>You have successfully joined the room with code: <strong>$enteredCode</strong></p>
                <p>Game Type: <strong>{$_SESSION['gameType']}</strong></p>
                <p>Number of Groups: <strong>{$_SESSION['groups']}</strong></p>
                <a href='index.html' class='btn'>Go to Index</a>
            </div>
        </body>
        </html>";
    } else {
        // Foute code ingevoerd
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Error</title>
            <link rel='stylesheet' href='css/styles.css'>
        </head>
        <body>
            <div class='container'>
                <h2>Error</h2>
                <p>Invalid room code. Please try again.</p>
                <a href='join.html' class='btn'>Back to Join Page</a>
            </div>
        </body>
        </html>";
    }
} else {
    // Als de pagina direct wordt bezocht zonder formulier
    header("Location: join.php");
    exit();
}
?>
