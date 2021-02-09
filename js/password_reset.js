function alerta(){
    Swal.fire({
        title: "Datos erróneos",
        text: `Los datos que ingresaste no son correctos`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}