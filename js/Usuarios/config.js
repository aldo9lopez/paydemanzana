function validarNombre() {
    valor3 = document.getElementById("nombre").value;
    valor4 = document.getElementById("apellido").value;

    var elemento = "";
    var alerta = false;
    if (valor3 == null || valor3.length == 0 || /^\s+$/.test(valor3)) {
        elemento += '"Nombre (s)" ';
        alerta = true;
    }
    if (valor4 == null || valor4.length == 0 || /^\s+$/.test(valor4)) {
        alerta = true;
        elemento += '"Apellido" ';
    }

    if (alerta) {
        camposVacios(elemento);
        return false;
    } 
    return true;
}

function validarPass() {
    pass1 = document.getElementById("pass").value;
    pass2 = document.getElementById("pass2").value;

    if (pass1 != pass2) {
        noPassword();
        return false;
    } else if(pass1.length<5){
        passwordCorta();
        return false;
    }
    return true;
}


function camposVacios(campos) {
    Swal.fire({
        title: "Error",
        text: `Los campos ${campos}no pueden estar vacíos`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}

function passwordCorta(){
    Swal.fire({
        title: "Error",
        text: `La contraseña debe tener al menos 5 caracteres`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}

function noPassword() {
    Swal.fire({
        title: "Error",
        text: `Las contraseñas no coinciden`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}

function contraseñaIncorrecta() {
    Swal.fire({
        title: "Error",
        text: `La contraseña no es correcta`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}


function mostrarDivs(num) {
    switch (num) {
        case 1:
            check = document.getElementById('check-nombre');
            if (check.checked) {
                document.getElementById('form-1').style.display = 'block';
            } else {
                document.getElementById('form-1').style.display = 'none';

            }
            break;
        case 2:
            check = document.getElementById('check-sexo');
            if (check.checked) {
                document.getElementById('form-2').style.display = 'block';
            } else {
                document.getElementById('form-2').style.display = 'none';

            }
            break;
        case 3:
            check = document.getElementById('check-anio');
            if (check.checked) {
                document.getElementById('form-3').style.display = 'block';
            } else {
                document.getElementById('form-3').style.display = 'none';

            }
            break;
        case 4:
            check = document.getElementById('check-pass');
            if (check.checked) {
                document.getElementById('form-4').style.display = 'block';
            } else {
                document.getElementById('form-4').style.display = 'none';

            }
            break;

    }
}