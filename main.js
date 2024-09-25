// console.log('loaded');


// let teamscores = window.localStorage.getItem('teamScore');



// // let teamScore = 0;

// const teamOne = document.querySelector('.teamOne');
// // const teamTwo = document.querySelector('button.teamTwo');



// const teamOneScore = document.querySelector('.teamOneScore');


// teamOne.addEventListener('click', plusPoints);

// // console.log(totaal);
// // console.log(teamTwo);


// teamOneScore.innerHTML = window.localStorage.getItem('teamScore');

// function plusPoints() {

//     if (teamscores > 0) {
//         let totaal = window.localStorage.getItem('teamScore');
//         localStorage.setItem('teamScore', totaal=totaal+3);
//     }else{
//         let totaal = 0;
//         localStorage.setItem('teamScore', totaal=totaal+3);
//     }
// localStorage.clear();
//     teamOneScore.innerHTML = window.localStorage.getItem('teamScore');

//     console.log(window.localStorage.getItem('teamScore'));

//     // return totaal;
// }



console.log('loaded');

let teamscores = window.localStorage.getItem('teamScore');

// let teamScore = 0;
const teamOne = document.querySelector('.teamOne');
// const teamTwo = document.querySelector('button.teamTwo');

const teamOneScore = document.querySelector('.teamOneScore');

teamOne.addEventListener('click', plusPoints);

// console.log(totaal);
// console.log(teamTwo);

teamOneScore.innerHTML = window.localStorage.getItem('teamScore') || 0; // Zorg dat de score 0 is als er nog geen waarde in localStorage staat

function plusPoints() {
    let totaal = parseInt(window.localStorage.getItem('teamScore')) || 0; // Zet de string om naar een getal, of gebruik 0 als er geen waarde is
    totaal += 3; // Tel 3 op bij de huidige score
    window.localStorage.setItem('teamScore', totaal); // Sla de nieuwe score op

    teamOneScore.innerHTML = totaal; // Werk de weergegeven score bij
    console.log(window.localStorage.getItem('teamScore'));
}