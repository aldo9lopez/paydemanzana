
$(document).ready( function () {
    $('.form-control-chosen-required').chosen({
        allow_single_deselect: false,
        width: '100%'
    });
    cambiarveces();
});

function manzanaB(){
    if(document.getElementById("myCheckbox1-1").checked == true){
        document.getElementById("myCheckbox2-1").checked = false;
    }
    if(document.getElementById("myCheckbox1-2").checked == true){
        document.getElementById("myCheckbox2-2").checked = false;
    }
    if(document.getElementById("myCheckbox1-3").checked == true){
        document.getElementById("myCheckbox2-3").checked = false;
    }
}

function manzanaM(){
    if(document.getElementById("myCheckbox2-1").checked == true){
        document.getElementById("myCheckbox1-1").checked = false;
    }
    if(document.getElementById("myCheckbox2-2").checked == true){
        document.getElementById("myCheckbox1-2").checked = false;
    }
    if(document.getElementById("myCheckbox2-3").checked == true){
        document.getElementById("myCheckbox1-3").checked = false;
    }
}

function cambiarveces(){
    var combo = document.getElementById("n-veces");
    var veces = combo.options[combo.selectedIndex].value;
    switch(veces){
        case "1":
            document.getElementById("nueva-calif-2").style.display = "none";
            document.getElementById("nueva-calif-3").style.display = "none";
            document.getElementById("estatus-1").innerHTML = "Aprobada";
            break;
        case "2":
            document.getElementById("nueva-calif-2").style.display = "block";
            document.getElementById("nueva-calif-3").style.display = "none";
            document.getElementById("estatus-1").innerHTML = "Reprobada";
            document.getElementById("estatus-2").innerHTML = "Aprobada";
            break;
        case "3":
            document.getElementById("nueva-calif-2").style.display = "block";
            document.getElementById("nueva-calif-3").style.display = "block";
            document.getElementById("estatus-1").innerHTML = "Reprobada";
            document.getElementById("estatus-2").innerHTML = "Reprobada";
            document.getElementById("estatus-3").innerHTML = "Aprobada";
            break;

    }
}

function validarCalificacion(){
    try{
        var combo = document.getElementById("n-veces");
        var veces = combo.options[combo.selectedIndex].value;
        combo = document.getElementById("required-1");
        var profesor_1 = combo.options[combo.selectedIndex].text;

        var elemento = "";
        var alerta = false;

        if( profesor_1 == 0|| profesor_1 == "" || profesor_1 =="Seleccionar"){
            elemento+="<br><strong>Profesor - Ordinario</strong> ";
            alerta = true;
        }
        if(!document.querySelector('input[name="estrellas-1"]:checked')) {
            elemento+="<br><strong>Calificación (estrellas) - Ordinario</strong> ";
            alerta = true;
        }
        
        if(veces>1){
            
            combo = document.getElementById("required-2");
            var profesor_2 = combo.options[combo.selectedIndex].text;
            if( profesor_2 == 0|| profesor_2 == "" || profesor_2 =="Seleccionar"){
                elemento+="<br><strong>Profesor - Repetición</strong> ";
                alerta = true;
            }
            if(!document.querySelector('input[name="estrellas-2"]:checked')) {
                elemento+="<br><strong>Calificación (estrellas) - Repetición</strong> ";
                alerta = true;
            }

            if(veces>2){
                combo = document.getElementById("required-3");
                var profesor_3 = combo.options[combo.selectedIndex].text;
                if( profesor_3 == 0|| profesor_3 == "" || profesor_3 =="Seleccionar"){
                    elemento+="<br><strong>Profesor - Especial</strong> ";
                    alerta = true;
                }
                if(!document.querySelector('input[name="estrellas-3"]:checked')) {
                    elemento+="<br><strong>Calificación (estrellas) - Especial</strong> ";
                    alerta = true;
                }

            }
        }
        if(alerta){
            camposVacios(elemento);
            return false;
        }else{
            return true;
        }



    }catch(e){
        return false;
        console.error('outer', ex.message);
    }
}

function camposVacios(campos){
    Swal.fire({
        title: "Error",
        html: `Los campos:${campos}<br>no pueden estar sin completar`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}