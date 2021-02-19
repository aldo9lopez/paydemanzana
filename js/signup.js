function validar() {
    valor1 = document.getElementById("control").value;
    valor2 = document.getElementById("email").value;
    valor3 = document.getElementById("nombre").value;
    valor4 = document.getElementById("apellido").value;
    pass1 = document.getElementById("pass").value;
    pass2 = document.getElementById("pass2").value;

    var elemento = "";
    var alerta = false;
    if (valor1 == null || valor1.length == 0 || /^\s+$/.test(valor1)) {
        elemento = '"Número de Control " ';
        alerta = true;
    }
    if (valor2 == null || valor2.length == 0 || /^\s+$/.test(valor2)) {
        elemento += '"Correo " ';
        alerta = true;
    }
    if (valor3 == null || valor3.length == 0 || /^\s+$/.test(valor3)) {
        elemento += '"Nombre (s) " ';
        alerta = true;
    }
    if (valor4 == null || valor4.length == 0 || /^\s+$/.test(valor4)) {
        alerta = true;
        elemento += '"Apellido " ';
    }

    if (alerta) {
        camposVacios(elemento);
        return false;
    } else if(valor1.length<8){
        numeroDeControl();
    }else if (pass1 != pass2) {
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

function numeroDeControl(){
    var numero = document.getElementById("control").value;
    if(numero.length!=8){
        numeroInvalido();
    }else{
        document.getElementById("email").value = numero;
    }
}

function numeroInvalido() {
    Swal.fire({
        title: "Error",
        text: `El numero de control debe tener 8 dígitos`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}

function checkPrivacidad(){
    check = document.getElementById('privacidad');

    if(check.checked){
        boton = document.getElementById('registrarse');
        boton.style.background = '#db4545';
        boton.style.color = '#ffffff';
        boton.disabled = false;
    }else{
        boton = document.getElementById('registrarse');
        boton.style.background = '#f8b1b1';
        boton.style.color = '#3a3a3a';
        boton.disabled = true;

    }
}

if(repetido){
    
    Swal.fire({
        title: "Error",
        text: `El numero de control que ingresaste ya está en uso`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}

