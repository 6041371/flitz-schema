<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Haal de room code op uit het formulier
    $enteredCode = strtoupper($_POST['roomCode']);

    // Controleer of de room code overeenkomt met de opgeslagen sessiecode
    if (isset($_SESSION['roomCode']) && $_SESSION['roomCode'] === $enteredCode) {
        // Als de code klopt, toon een bevestigingsbericht of redirect naar de room pagina
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
                <!-- Voeg hier verdere room details of opties toe -->
                <a href='index.html' class='btn'>Go to Index</a>
            </div>
        </body>
        </html>";
    } else {
        // Als de code niet klopt, geef een foutmelding
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
    // Als de pagina direct benaderd wordt zonder formulier
    header("Location: join.html");
    exit();
}
?>
