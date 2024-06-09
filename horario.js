function atualizaHorario() {
    var request = new XMLHttpRequest();
    var url = "horario.php";

    request.open("GET", url, true);

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            console.log('Conteúdo carregado');
            var div_horario = document.getElementById("horario");
            div_horario.innerHTML = request.responseText;
        }
    };

    request.send(null);
}

setInterval(atualizaHorario, 1000);
