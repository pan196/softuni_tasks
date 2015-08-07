var input = document.getElementById('input');
var lastInput = '';


function redField(){
    if(isNaN(input.value)) {
        input.style.background = 'red';
        input.disabled = true;
        input.value = lastInput;
        setTimeout(getLastInput, 2000);

    } else {
        lastInput = input.value;
    }
}

function getLastInput(){
    input.value = lastInput;
    input.style.background = '';
    input.disabled = false;
    input.focus();
}

input.addEventListener('input', redField, false);