

function mostrarDivs(num) {
    switch (num) {
        case 1:
            check = document.getElementById('check-tit');
            if (check.checked) {
                document.getElementById('form-1').style.display = 'block';
                document.getElementById('flecha-1').innerHTML = 'arrow_drop_up';
            } else {
                document.getElementById('form-1').style.display = 'none';
                document.getElementById('flecha-1').innerHTML = 'arrow_drop_down';

            }
            break;
        case 2:
            check = document.getElementById('check-signo');
            if (check.checked) {
                document.getElementById('form-2').style.display = 'block';
                document.getElementById('flecha-2').innerHTML = 'arrow_drop_up';
            } else {
                document.getElementById('form-2').style.display = 'none';
                document.getElementById('flecha-2').innerHTML = 'arrow_drop_down';

            }
            break;
        case 3:
            check = document.getElementById('check-redes');
            if (check.checked) {
                document.getElementById('form-3').style.display = 'block';
                document.getElementById('flecha-3').innerHTML = 'arrow_drop_up';
            } else {
                document.getElementById('form-3').style.display = 'none';
                document.getElementById('flecha-3').innerHTML = 'arrow_drop_down';

            }
            break;
        case 4:
            check = document.getElementById('check-pref');
            if (check.checked) {
                document.getElementById('form-4').style.display = 'block';
                document.getElementById('flecha-4').innerHTML = 'arrow_drop_up';
            } else {
                document.getElementById('form-4').style.display = 'none';
                document.getElementById('flecha-4').innerHTML = 'arrow_drop_down';

            }
            break;

    }
}

const inpFile = document.getElementById("inpFile");
const contenedor = document.getElementById("imagePreview");
const image = contenedor.querySelector(".imagen-perfil");
var img = image.getAttribute("src");

inpFile.addEventListener("change", function(){
    const file = this.files[0];

    if(file){
        const reader = new FileReader();

        reader.addEventListener("load", function(){
            image.setAttribute("src", this.result);
        });
        

        reader.readAsDataURL(file);
    }else{
        image.setAttribute("src", img);
    }
});

function error(){
    Swal.fire({
        title: "La imagen excede el tamaño permitido",
        text: `La imagen que intentas subir supera los 1mb intenta subir otra imagen`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}

$(function(){
    var fileInput = $('.upload-file');
    var maxSize = fileInput.data('max-size');
    $('.upload-form').submit(function(e){
        if(fileInput.get(0).files.length){
            var fileSize = fileInput.get(0).files[0].size; // in bytes
            if(fileSize>maxSize){
                limiteExcedido();
                return false;
            }else{
                return true;
            }
        }else{
            if($('.comentario').val().length<1){
                return false;
            }
            return true;
        }

    });
});

function limiteExcedido() {
    Swal.fire({
        title: "Error",
        text: `La imagen que intentas subir supera los 5 megabytes permitidos, intenta subir otra imagen`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}