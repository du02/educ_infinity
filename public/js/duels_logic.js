const buttonDuel = document.querySelector('#button-duel');

// data-challenged
let challengedId = document.querySelector('#challenged-studant-id').value;
let challengedPower = document.querySelector('#challenged-power').value;
let challengedAttack = document.querySelector('#challenged-attack').value;
let challengedVitality = document.querySelector('#challenged-vitality').value;
let challengedCritical = document.querySelector('#challenged-critical').value;
let challengedLuck = document.querySelector('#challenged-luck').value;
let challengedArmor = document.querySelector('#challenged-armor').value;
let challengedPoints = document.querySelector('#challenged-points').value;

let dataChallenged = {
    'studant_id': challengedId,
    'power' : challengedPower,
    'attack': challengedAttack,
    'vitality': challengedVitality,
    'critical': challengedCritical,
    'luck': challengedLuck,
    'armor': challengedArmor,
    'points': challengedPoints
};

// data-opponent
let opponentId = document.querySelector('#opponent-studant-id').value;
let opponentPower = document.querySelector('#opponent-power').value;
let opponentAttack = document.querySelector('#opponent-attack').value;
let opponentVitality = document.querySelector('#opponent-vitality').value;
let opponentCritical = document.querySelector('#opponent-critical').value;
let opponentLuck = document.querySelector('#opponent-luck').value;
let opponentArmor = document.querySelector('#opponent-armor').value;
let opponentPoints = document.querySelector('#opponent-points').value;

let dataOpponent = {
    'studant_id': opponentId,
    'power' : opponentPower,
    'attack': opponentAttack,
    'vitality': opponentVitality,
    'critical': opponentCritical,
    'luck': opponentLuck,
    'armor': opponentArmor,
    'points': opponentPoints
};

buttonDuel.addEventListener('click', (e) => {
    e.preventDefault();

    init(dataChallenged, dataOpponent);
});

const init = (challengend, opponent) => {
    console.log(challengend, opponent);
}

