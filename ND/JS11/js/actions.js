function atvaizduoti(veiksmas) {
   document.getElementById('display').value += veiksmas;
}

function istrinti(reiksme) {
    document.getElementById('display').value = reiksme;
}

function rezultatas() {
    var result = eval(document.getElementById('display').value);
    document.getElementById('display').value = result;
}     
