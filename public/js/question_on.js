const pOne = document.querySelector('#question_on_1');
const pTwo = document.querySelector('#question_on_2');
const pThree = document.querySelector('#question_on_3');
const pFour = document.querySelector('#question_on_4');
const pFive = document.querySelector('#question_on_5');

const buttonValueOne = document.querySelector('#confirm_value_1');
const buttonValueTwo = document.querySelector('#confirm_value_2');
const buttonValueThree = document.querySelector('#confirm_value_3');
const buttonValueFour = document.querySelector('#confirm_value_4');
const buttonValueFive = document.querySelector('#confirm_value_5');

const selectValueOne = document.querySelector('#value_response_1');
const selectValueTwo = document.querySelector('#value_response_2');
const selectValueThree = document.querySelector('#value_response_3');
const selectValueFour = document.querySelector('#value_response_4');
const selectValueFive = document.querySelector('#value_response_5');

const divYouResponseOne = document.querySelector('#you_response_1');
const divYouResponseTwo = document.querySelector('#you_response_2');
const divYouResponseThree = document.querySelector('#you_response_3');
const divYouResponseFour = document.querySelector('#you_response_4');
const divYouResponseFive = document.querySelector('#you_response_5');

buttonValueOne.addEventListener('click', (e) => {
    e.preventDefault();

    // adding correct responde in screen
    pOne.classList.remove('invisible');

    // remove select and adding response selected
    selectValueOne.classList.add('invisible');
    divYouResponseOne.innerHTML = '' + selectValueOne.value + '';

    // remove button
    buttonValueOne.classList.add('invisible');

});

buttonValueTwo.addEventListener('click', (e) => {
    e.preventDefault();

    // adding correct responde in screen
    pTwo.classList.remove('invisible');

    // remove select and adding response selected
    selectValueTwo.classList.add('invisible');
    divYouResponseTwo.innerHTML = '' + selectValueTwo.value + '';

    // remove button
    buttonValueTwo.classList.add('invisible');

});

buttonValueThree.addEventListener('click', (e) => {
    e.preventDefault();

    // adding correct responde in screen
    pThree.classList.remove('invisible');

    // remove select and adding response selected
    selectValueThree.classList.add('invisible');
    divYouResponseThree.innerHTML = '' + selectValueThree.value + '';

    // remove button
    buttonValueThree.classList.add('invisible');

});

buttonValueFour.addEventListener('click', (e) => {
    e.preventDefault();

    // adding correct responde in screen
    pFour.classList.remove('invisible');

    // remove select and adding response selected
    selectValueFour.classList.add('invisible');
    divYouResponseFour.innerHTML = '' + selectValueFour.value + '';

    // remove button
    buttonValueFour.classList.add('invisible');

});

buttonValueFive.addEventListener('click', (e) => {
    e.preventDefault();

    // adding correct responde in screen
    pFive.classList.remove('invisible');

    // remove select and adding response selected
    selectValueFive.classList.add('invisible');
    divYouResponseFive.innerHTML = '' + selectValueFive.value + '';

    // remove button
    buttonValueFive.classList.add('invisible');

});

// block in F5
window.addEventListener('keydown', (e) => {
    var code = e.which || e.keyCode;
    if (code == 116) e.preventDefault();
    else return true;
});
