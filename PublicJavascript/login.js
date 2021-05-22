function login() {
    var parametri = {
        id_utente: $('#username').val(),
        password: $('#password').val(),
        tipo_utente : $('#tipo_utente').val()
    };
    var stringaParametri = JSON.stringify(parametri);
    $.ajax({
        type: "POST",
        url: "../PublicMetodi/login.php",
        data: {data:stringaParametri},
        success: function(risposta) {
            switch (parseInt(risposta)){
                case 0:
                    switch (parseInt(parametri.tipo_utente)){
                        case 0:
                            window.location.href="../";
                            break;
                        case 1:
                            window.location.href="../";
                            break;
                        case 2:
                            window.location.href="../Home/homeAmministratore.php";
                            break;
                    }
                    break;
                case 1:
                    alert("Controlla l'username e il tipo utente se sono corretti");
                    break;
                case 2:
                    alert("Hai sbagliato la password!");
                    break;

            }
        },
        error: function() {
            alert("Chiamata FAllita");
        }
    });
}