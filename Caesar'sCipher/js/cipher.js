function display() {
    var message = document.querySelector('[name="input-message"]').value;
    document.querySelector('[name="output-message"').innerHTML = message;
}

function reset() {
    var message = document.querySelector('[name="output-message"]').value;
    document.querySelector('[name="output-message"').innerHTML = message;
}