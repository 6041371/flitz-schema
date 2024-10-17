console.log('loaded');

let teamscores = window.localStorage.getItem('teamScore') || 0; // Zorg dat de score 0 is als er nog geen waarde in localStorage staat

const teamOne = document.querySelector('.teamOne');
const teamOneScore = document.querySelector('.teamOneScore');

teamOne.addEventListener('click', plusPoints);

teamOneScore.innerHTML = teamscores; // Toon de huidige score of 0

function plusPoints() {
    let totaal = parseInt(window.localStorage.getItem('teamScore')) || 0; // Zet de string om naar een getal, of gebruik 0 als er geen waarde is
    totaal += 3; // Tel 3 op bij de huidige score
    window.localStorage.setItem('teamScore', totaal); // Sla de nieuwe score op

    teamOneScore.innerHTML = totaal; // Werk de weergegeven score bij
    console.log(window.localStorage.getItem('teamScore'));
}
