function inserimentonegozio() {
    var parametri = {
        p_iva: $('#p_iva').val(),
        nomeN: $('#nomeN').val(),
        nomeComm: $('#nomeComm').val(),
        cognomeComm: $('#cognomeComm').val(),
        emailComm: $('#emailComm').val()
    };
    var stringaParametri = JSON.stringify(parametri);
    $.ajax({
        type: "POST",
        url: "../AdminMetodi/nuovoNegozio.php",
        data: {data:stringaParametri},
        success: function(risposta) {
            switch (parseInt(risposta)){
                case 0:
                    alert("Negozio inserito!");
                    window.location.href='../Admin/gestioneNegozi.php';
                    break;
                case 1:
                    alert("Qualcosa non ha funzionato!");
            }
        },
        error: function() {
            alert("Chiamata FAllita");
        }
    });
}