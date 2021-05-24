function registrazione() {
    var parametri = {
        id_utente: $('#username').val(),
        nome: $('#nome').val(),
        cognome: $('#cognome').val(),
        d_nascita: $('#DataNascita').val(),
        LuogoNascita: $('#LuogoNascita').val(),
        Sesso: $('#sesso').val(),
        codiceFiscale: $('#codiceFiscale').val(),
        email: $('#email').val(),
        password: $('#password').val()
    };
    console.log(parametri);
    var stringaParametri = JSON.stringify(parametri);
    $.ajax({
        type: "POST",
        url: "../PublicMetodi/registrazione.php",
        data: {data:stringaParametri},
        success: function(risposta) {
            switch (parseInt(risposta)){
                case 0:
                    alert("Iscrizione completata!");
                    window.location.href="../";
                    break;
                case 1:
                    alert("Qualcosa non ha funzionato!");
                    break;
                case 2:
                    alert("Username già inserito");
                    break;
            }
        },
        error: function() {
            alert("Chiamata FAllita");
        }
    });
}