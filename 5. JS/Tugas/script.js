function screen(value) {
    document.getElementById("output").value = value;
}

function display(value) {
    document.getElementById("output").value += value;
}

function zero() {
    var view = document.getElementById("output");
    if (view.value != "") {
        view.value += '0';
    }
}

function solve() {
    try {
        screen(eval(document.getElementById("output").value))
    } catch (err) {
        screen('Syntax Error')
    }
}

function clear_output() {
    document.getElementById("output").value = "";
}