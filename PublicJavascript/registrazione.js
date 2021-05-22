function registrazione() {
    var parametri = {
        id_utente: $('#username').val(),
        nome: $('#nome').val(),
        cognome: $('#cognome').val(),
        DatadiNascita: $('#dataNascita').val(),
        LuogoNascita: $('#LuogoNascita').val(),
        Sesso: $('#sesso').val(),
        codiceFiscale: $('#codiceFiscale').val(),
        email: $('#email').val(),
        password: $('#password').val()
    };
    var stringaParametri = JSON.stringify(parametri);
    $.ajax({
        type: "POST",
        url: "../PublicMetodi/registrazione.php",
        data: {data:stringaParametri},
        success: function(risposta) {
            console.log(risposta);
        },
        error: function() {
            alert("Chiamata FAllita");
        }
    });
}