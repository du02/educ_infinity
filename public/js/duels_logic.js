const buttonDuel = document.querySelector('#button-duel');
const buttonReloadDuel = document.querySelector('#button-reload-duel');

const divProgressBarChal = document.querySelector('#progress-bar-challenged');
const divProgressBarPop = document.querySelector('#progress-bar-opponent');
const divDefeatChal = document.querySelector('#challenged');
const divDefeatOpp = document.querySelector('#opponent');
const textResult = document.querySelector('#text-result');

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

let urlRemove = 'http://127.0.0.1:8000/studant/remove-energy';
let urlAdding = 'http://127.0.0.1:8000/studant/adding-points-fight';
let token = document.querySelector('#token').value;

buttonDuel.addEventListener('click', (e) => {
    e.preventDefault();

    init();
});

const init = () => {

    // remove energy
    removeEnergy(urlRemove, token);
    // buttons config
    buttonInvisible();
    // animate progress
    progressBar();
    // button reload
    setTimeout(addButtonReload, 10500);
    // result duel
    setTimeout(startDuel, 10600);

}

const startDuel = () => {
    let value = battle(dataChallenged, dataOpponent);

    if (value === 1){
        addingPointsFight(urlAdding, token, dataChallenged.studant_id);
        addTextResult('Parabéns! você venceu.');
        divDefeatDuel(divDefeatOpp);
    } else {
        addingPointsFight(urlAdding, token, dataOpponent.studant_id);
        addTextResult('Derrota! seu oponente venceu.');
        divDefeatDuel(divDefeatChal);
    }

    modalResult();
}

const battle = (challenged, opponent) => {

    let damageChallenged = damage(challenged, opponent.vitality);
    let damageOpponent = damage(opponent, challenged.vitality);

    let result = (damageChallenged.length > damageOpponent.length) ? 1 : 0;
    return result;
}

// Logic damage
const damage = (data, hp) => {
    let round = 1;
    let listDamage = [];

    do {

        let damageHit = getRandomDamage(0, data.attack);
        let nowVitality = hp -= damageHit;

        listDamage.push(damageHit);

        if (nowVitality <= 0)
        {
            break;
        }

    } while (round < 20);

    return listDamage;
}

// Random max. Damage
const getRandomDamage = (min, max) => {
    min = Math.ceil(min);
    max = Math.floor(max);
    return (Math.floor(Math.random() * (max - min)) + min);
}

// static
const divDefeatDuel = (div) => {
    div.classList.add('defeat');
}

const buttonInvisible = () => {
    buttonDuel.classList.add('invisible');
}

const addButtonReload = () => {
    buttonReloadDuel.classList.remove('invisible')
    buttonReloadDuel.addEventListener('click', (e) => {
        e.preventDefault();

        window.location.reload();
    });
}

// progress bar
const progressBar = () => {
    divProgressBarChal.classList.add('progress-bar-animate-one-normal');
    divProgressBarPop.classList.add('progress-bar-animate-one-reverse');
}

const addTextResult = (winner) => {
    textResult.innerHTML = winner;
}

// modal
const modalResult = () => {
    $('#resultDuelModal').modal({
       show: true
    });
}

// remove energy
const removeEnergy = (url, token) => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token,
        }
    });

    $(document).ready(function () {
           $.ajax({
               url: url,
               type: 'get',
               dataType: 'json'
           });
    });
}

// add points fight
const addingPointsFight = (url, token, id) => {

    // id
    let data = {'id': id};

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token,
        }
    });

    $.ajax({
        url: url,
        type: 'post',
        data: data,
        dataType: 'json',
        success: function (response) {
            console.log(response);
        }
    });

}



