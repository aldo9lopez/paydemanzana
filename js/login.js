if(usuarioCreado){
    success();
}

if(accesoDenegado){
    error();
}

if(reestablecer){
    success24();
}

function error(){
    Swal.fire({
        title: "No puedes acceder",
        text: `Ususario y/o contraseña incorrectos`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}

function success(){
    Swal.fire({
        title: "Usuario creado",
        text: `Tu usuario ha sido creado, hemos enviado una clave de verificación a tu correo`,
        icon: 'success',
        width: '400px',
        confirmButtonColor: '#5DD65A'
    });
}

function success24(){
    Swal.fire({
        title: "Contraseña reestablecida",
        text: `Tu contraseña ha sido reestablecida, econtrarás tu nueva contraseña en tu correo`,
        icon: 'success',
        width: '400px',
        confirmButtonColor: '#5DD65A'
    });
}
