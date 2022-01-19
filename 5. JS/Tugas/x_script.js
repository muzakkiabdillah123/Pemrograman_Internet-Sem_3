// Menghapus seluruh angka (tombol C)
function clear_output() {
    document.getElementById("output").innerHTML = "0";
}

function zero() {
    var view = document.getElementById("output");
    if (view.value != "") {
        view.value += '0';
    }
}

// Menghapus angka 0 diawal
function remove_zero(){
    var value = document.getElementById("output").innerHTML;
    if(value == "0")
    {
        value = " "
        document.getElementById("output").innerHTML = value;
    }
}

// Memasukkan angka ke display
function for_display(value) {
    remove_zero();
    document.getElementById("output").innerHTML += value;
}

// Mengihitung
function hitung() {
    remove_zero();
    var equation = document.getElementById("output").innerHTML;
    var solved = eval(equation);
    document.getElementById('output').innerHTML = solved;
}