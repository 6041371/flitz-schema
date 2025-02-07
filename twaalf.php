<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12 Teams Schema</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* CSS styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
        }
/* Ronde 1: Lichte Oranje */
td:nth-child(2), td:nth-child(3) {
    background-color: rgba(255, 204, 153, 0.8); /* Lichte Oranje */
    border: white 4px solid;
}
 
/* Ronde 2: Lichte Abrikoos */
td:nth-child(4), td:nth-child(5) {
    background-color: rgba(255, 220, 185, 0.8); /* Lichte Abrikoos */
    border: white 4px solid;
}
 
/* Ronde 3: Lichte Perzik */
td:nth-child(6), td:nth-child(7) {
    background-color: rgba(255, 239, 204, 0.8); /* Lichte Perzik */
    border: white 4px solid;
}
 
/* Ronde 4: Lila */
td:nth-child(8), td:nth-child(9) {
    background-color: rgba(230, 230, 250, 0.8); /* Lila */
    border: white 4px solid;
}
 
/* Ronde 5: Lichtere Koele Paarse Tint */
td:nth-child(10), td:nth-child(11) {
    background-color: rgba(225, 200, 255, 0.8); /* Lichtere Koele Paarse Tint */
    border: white 4px solid;
}
 
/* Ronde 6: Lichte Paars */
td:nth-child(12), td:nth-child(13) {
    background-color: rgba(204, 204, 255, 0.8); /* Lichte Paars */
    border: white 4px solid;
}
 
 
 
 
        #beschrijving {
            text-align: center;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 20px 0;
        }
        td, th {
            width: 6.25%;
            height: 50px;
            text-align: center;
            font-size: 1.2rem;
            padding: 10px;
            /* background-color: white; */
            position: relative;
            cursor: pointer;
        }
        td.selected {
            border: 2px solid black;
            border-width: 4px;
            border-radius: 150px/90px;
            pointer-events: none;
        }
        th {
            background-color: #ff9d00;
            color: #fff;
        }
        .punten-vakje {
            width: 50px;
            height: 30px;
            text-align: center;
            border: 2px solid ;
            box-sizing: border-box;
        }
 
        /* gameType en roomCode */
        .gameType {
            font-size: 2rem;
            color: #ff9d00;
            align-items: center;
            margin-left: 10px;
        }
        .roomCode {
            font-size: 2rem;
            color: #ff9d00;
            margin-right: 2vw;
        }
        .info-container {
            display: flex;
            justify-content: space-between;
            margin-left: 2vw;
        }
    </style>
</head>
<body>
    <div id="beschrijving">
        <h1>Wedstrijdschema</h1>
        <h2>12 Teams</h2>
        <div class="info-container">
            <div class="gameType">
                <p>Game: <?php echo $_SESSION['gameType']; ?></p>
            </div>
            <div class="roomCode">
                <p>Code: <?php echo $_SESSION['roomCode']; ?></p>
            </div>
        </div>
    </div>
    <!-- Wedstrijdschema -->
    <table>
        <tr>
            <th>Games</th>
           
            <th colspan="2">Ronde 1</th>
            <th colspan="2">Ronde 2</th>
            <th colspan="2">Ronde 3</th>
            <th colspan="2">Ronde 4</th>
            <th colspan="2">Ronde 5</th>
            <th colspan="2">Ronde 6</th>
        </tr>
        <tr>
            <td><input></td>
            <td onclick="selectWinner(this, 1, 1)">1</td>
            <td onclick="selectWinner(this, 2, 1)">2</td>
            <td onclick="selectWinner(this, 3, 2)">3</td>
            <td onclick="selectWinner(this, 5, 2)">5</td>
            <td onclick="selectWinner(this, 4, 3)">4</td>
            <td onclick="selectWinner(this, 10, 3)">10</td>
            <td onclick="selectWinner(this, 7, 4)">7</td>
            <td onclick="selectWinner(this, 11, 4)">11</td>
            <td onclick="selectWinner(this, 12, 5)">12</td>
            <td onclick="selectWinner(this, 6, 5)">6</td>
            <td onclick="selectWinner(this, 9, 6)">9</td>
            <td onclick="selectWinner(this, 8, 6)">8</td>
        </tr>
        <tr>
            <td><input></td>
            <td onclick="selectWinner(this, 3, 1)">3</td>
            <td onclick="selectWinner(this, 4, 1)">4</td>
            <td onclick="selectWinner(this, 1, 2)">1</td>
            <td onclick="selectWinner(this, 11, 2)">11</td>
            <td onclick="selectWinner(this, 2, 3)">2</td>
            <td onclick="selectWinner(this, 8, 3)">8</td>
            <td onclick="selectWinner(this, 6, 4)">6</td>
            <td onclick="selectWinner(this, 10, 4)">10</td>
            <td onclick="selectWinner(this, 9, 5)">9</td>
            <td onclick="selectWinner(this, 7, 5)">7</td>
            <td onclick="selectWinner(this, 12, 6)">12</td>
            <td onclick="selectWinner(this, 5, 6)">5</td>
        </tr>
        <tr>
            <td><input></td>
            <td onclick="selectWinner(this, 5, 1)">5</td>
            <td onclick="selectWinner(this, 6, 1)">6</td>
            <td onclick="selectWinner(this, 2, 2)">2</td>
            <td onclick="selectWinner(this, 9, 2)">9</td>
            <td onclick="selectWinner(this, 1, 3)">1</td>
            <td onclick="selectWinner(this, 3, 3)">3</td>
            <td onclick="selectWinner(this, 8, 4)">8</td>
            <td onclick="selectWinner(this, 12, 4)">12</td>
            <td onclick="selectWinner(this, 4, 5)">4</td>
            <td onclick="selectWinner(this, 11, 5)">11</td>
            <td onclick="selectWinner(this, 10, 6)">10</td>
            <td onclick="selectWinner(this, 7, 6)">7</td>
        </tr>
        <tr>
            <td><input></td>
            <td onclick="selectWinner(this, 7, 1)">7</td>
            <td onclick="selectWinner(this, 8, 1)">8</td>
            <td onclick="selectWinner(this, 4, 2)">4</td>
            <td onclick="selectWinner(this, 6, 2)">6</td>
            <td onclick="selectWinner(this, 9, 3)">9</td>
            <td onclick="selectWinner(this, 12, 3)">12</td>
            <td onclick="selectWinner(this, 1, 4)">1</td>
            <td onclick="selectWinner(this, 5, 4)">5</td>
            <td onclick="selectWinner(this, 3, 5)">3</td>
            <td onclick="selectWinner(this, 10, 5)">10</td>
            <td onclick="selectWinner(this, 2, 6)">2</td>
            <td onclick="selectWinner(this, 11, 6)">11</td>
        </tr>
        <tr>
            <td><input></td>
            <td onclick="selectWinner(this, 9, 1)">9</td>
            <td onclick="selectWinner(this, 10, 1)">10</td>
            <td onclick="selectWinner(this, 7, 2)">7</td>
            <td onclick="selectWinner(this, 12, 2)">12</td>
            <td onclick="selectWinner(this, 11, 3)">11</td>
            <td onclick="selectWinner(this, 5, 3)">5</td>
            <td onclick="selectWinner(this, 2, 4)">2</td>
            <td onclick="selectWinner(this, 4, 4)">4</td>
            <td onclick="selectWinner(this, 1, 5)">1</td>
            <td onclick="selectWinner(this, 8, 5)">8</td>
            <td onclick="selectWinner(this, 3, 6)">3</td>
            <td onclick="selectWinner(this, 6, 6)">6</td>
        </tr>
        <tr>
            <td><input></td>
            <td onclick="selectWinner(this, 11, 1)">11</td>
            <td onclick="selectWinner(this, 12, 1)">12</td>
            <td onclick="selectWinner(this, 8, 2)">8</td>
            <td onclick="selectWinner(this, 10, 2)">10</td>
            <td onclick="selectWinner(this, 6, 3)">6</td>
            <td onclick="selectWinner(this, 7, 3)">7</td>
            <td onclick="selectWinner(this, 3, 4)">3</td>
            <td onclick="selectWinner(this, 9, 4)">9</td>
            <td onclick="selectWinner(this, 2, 5)">2</td>
            <td onclick="selectWinner(this, 5, 5)">5</td>
            <td onclick="selectWinner(this, 1, 6)">1</td>
            <td onclick="selectWinner(this, 4, 6)">4</td>
        </tr>
    </table>
 
    <!-- Puntenstand -->
    <div id="beschrijving">
        <h2>Puntenstand</h2>
        <table class="punten-table">
            <tr>
                <th>Team</th>
                <th>Ronde 1</th>
                <th>Ronde 2</th>
                <th>Ronde 3</th>
                <th>Ronde 4</th>
                <th>Ronde 5</th>
                <th>Ronde 6</th>
                <th>Totaal</th>
            </tr>
            <tr id="team1"><td>Team 1</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <tr id="team2"><td>Team 2</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <tr id="team3"><td>Team 3</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <!-- Herhaal voor Team 4 tot en met Team 12 -->
            <tr id="team4"><td>Team 4</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <tr id="team5"><td>Team 5</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <tr id="team6"><td>Team 6</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <tr id="team7"><td>Team 7</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <tr id="team8"><td>Team 8</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <tr id="team9"><td>Team 9</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <tr id="team10"><td>Team 10</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <tr id="team11"><td>Team 11</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
            <tr id="team12"><td>Team 12</td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td><td class="punten-vakje"></td></tr>
        </table>
    </div>


   
   <script>
   function selectWinner(cell, team, round) {
    // Zoek de rij waartoe de geselecteerde cel behoort
    let row = cell.closest('tr');

    // Zoek alle cellen die al geselecteerd zijn voor deze lijn (horizontale lijn)
    let selectedCells = row.querySelectorAll('td.selected[data-round="' + round + '"]');

    // Als er al een selectie is, maak deze dan ongedaan door de scores te resetten
    if (selectedCells.length > 0) {
        // Verwijder de 'selected' class en reset het ronde-attribuut
        selectedCells.forEach(selectedCell => {
            selectedCell.classList.remove('selected');
            selectedCell.removeAttribute('data-round');
        });

        // Zoek het team en het puntensysteem voor de vorige winnaar
        let prevTeam = selectedCells[0].getAttribute('data-team');
        let prevTeamRow = document.getElementById('team' + prevTeam);
        let prevPuntenCell = prevTeamRow.getElementsByClassName('punten-vakje')[round - 1];
        let prevTotaalCell = prevTeamRow.lastElementChild;

        // Verlaag de punten van het vorige team
        prevPuntenCell.textContent = (parseInt(prevPuntenCell.textContent) || 0) - 3;
        prevTotaalCell.textContent = (parseInt(prevTotaalCell.textContent) || 0) - 3;
    }

    // Markeer de nieuwe geselecteerde cel en voorkom extra klikken
    cell.classList.add('selected');
    cell.setAttribute('data-round', round);
    cell.setAttribute('data-team', team); // Opslaan welk team geselecteerd is

    // Zoek het puntenveld en het totaalveld voor het winnende team
    let teamRow = document.getElementById('team' + team);
    let puntenCell = teamRow.getElementsByClassName('punten-vakje')[round - 1];
    let totaalCell = teamRow.lastElementChild;

    // Update punten voor het nieuwe geselecteerde team
    puntenCell.textContent = (parseInt(puntenCell.textContent) || 0) + 3;
    totaalCell.textContent = (parseInt(totaalCell.textContent) || 0) + 3;
}


</script>
</body>
</html>