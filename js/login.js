if(usuarioCreado){
    success();
}

if(accesoDenegado){
    error();
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
        text: `Tu usuario ha sido creado con éxito`,
        icon: 'success',
        width: '400px',
        confirmButtonColor: '#5DD65A'
    });
}
