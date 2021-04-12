document.getElementById("formulario").addEventListener("submit", function(event){
    let hasError = false;
    
    if(!document.querySelector('input[name="q10"]:checked')) {
        sinResponder(10);
        hasError = true;
    }
    
    if(!document.querySelector('input[name="q9"]:checked')) {
        sinResponder(9);
        hasError = true;
    }
    
    if(!document.querySelector('input[name="q8"]:checked')) {
        sinResponder(8);
        hasError = true;
    }
    
    if(!document.querySelector('input[name="q7"]:checked')) {
        sinResponder(7);
        hasError = true;
    }
    
    if(!document.querySelector('input[name="q6"]:checked')) {
        sinResponder(6);
        hasError = true;
    }
    
    if(!document.querySelector('input[name="q5"]:checked')) {
        sinResponder(5);
        hasError = true;
    }
    
    if(!document.querySelector('input[name="q4"]:checked')) {
        sinResponder(4);
        hasError = true;
    }
    
    if(!document.querySelector('input[name="q3"]:checked')) {
        sinResponder(3);
        hasError = true;
    }
    
    if(!document.querySelector('input[name="q2"]:checked')) {
        sinResponder(2);
        hasError = true;
    }
    
    if(!document.querySelector('input[name="q1"]:checked')) {
        sinResponder(1);
        hasError = true;
    }


    // si hay algún error no efectuamos la acción submit del form
    if(hasError) event.preventDefault();
});

function sinResponder(num) {
    Swal.fire({
        title: "Error",
        text: `No has respondido la pregunta No.`+num,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}