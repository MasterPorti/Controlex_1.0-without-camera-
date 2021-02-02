


//Ejecución de codigo al presionar un tecla

function presionar_tecla() {

    tecla_esc = event.keyCode;

    if (tecla_esc == 27) {

    window.estado=1;
    header("Status: 301 Moved Permanently");
    header("Location: /html/login.php");

    }

}

window.onkeydown = presionar_tecla;



//Creando filtrado de busqueda
event.keyCode
