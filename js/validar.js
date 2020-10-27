if(accesoDenegado){
    codigoIncorrecto();
}
function codigoIncorrecto() {
    Swal.fire({
        title: "Código incorrecto",
        text: `El código proporcionado es incorrecto`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}

function correoEnviado() {
    Swal.fire({
        title: "Correo reenviado",
        text: `Hemos reenviado un correo con un nuevo código de verificación`,
        icon: 'success',
        width: '400px',
        confirmButtonColor: '#5DD65A'
    });
}