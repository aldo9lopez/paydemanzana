function changeComentarios(num){
    switch(num){
        case 1:
            document.getElementById('com-1estrellas').style.display = 'block';
            document.getElementById('com-2estrellas').style.display = 'none';
            document.getElementById('com-3estrellas').style.display = 'none';
            document.getElementById('com-4estrellas').style.display = 'none';
            document.getElementById('com-5estrellas').style.display = 'none';
            document.getElementById('com-todos').style.display = 'none';

            document.getElementById('est-1').style.background = '#7e7e7e';
            document.getElementById('est-2').style.background = '#db4545';
            document.getElementById('est-3').style.background = '#db4545';
            document.getElementById('est-4').style.background = '#db4545';
            document.getElementById('est-5').style.background = '#db4545';
            document.getElementById('est-todos').style.background = '#db4545';
            break;
        case 2:
            document.getElementById('com-1estrellas').style.display = 'none';
            document.getElementById('com-2estrellas').style.display = 'block';
            document.getElementById('com-3estrellas').style.display = 'none';
            document.getElementById('com-4estrellas').style.display = 'none';
            document.getElementById('com-5estrellas').style.display = 'none';
            document.getElementById('com-todos').style.display = 'none';

            
            document.getElementById('est-1').style.background = '#db4545';
            document.getElementById('est-2').style.background = '#7e7e7e';
            document.getElementById('est-3').style.background = '#db4545';
            document.getElementById('est-4').style.background = '#db4545';
            document.getElementById('est-5').style.background = '#db4545';
            document.getElementById('est-todos').style.background = '#db4545';
            break;
        case 3:
            document.getElementById('com-1estrellas').style.display = 'none';
            document.getElementById('com-2estrellas').style.display = 'none';
            document.getElementById('com-3estrellas').style.display = 'block';
            document.getElementById('com-4estrellas').style.display = 'none';
            document.getElementById('com-5estrellas').style.display = 'none';
            document.getElementById('com-todos').style.display = 'none';
            
            document.getElementById('est-1').style.background = '#db4545';
            document.getElementById('est-2').style.background = '#db4545';
            document.getElementById('est-3').style.background = '#7e7e7e';
            document.getElementById('est-4').style.background = '#db4545';
            document.getElementById('est-5').style.background = '#db4545';
            document.getElementById('est-todos').style.background = '#db4545';
            break;
        case 4:
            document.getElementById('com-1estrellas').style.display = 'none';
            document.getElementById('com-2estrellas').style.display = 'none';
            document.getElementById('com-3estrellas').style.display = 'none';
            document.getElementById('com-4estrellas').style.display = 'block';
            document.getElementById('com-5estrellas').style.display = 'none';
            document.getElementById('com-todos').style.display = 'none';

            document.getElementById('est-1').style.background = '#db4545';
            document.getElementById('est-2').style.background = '#db4545';
            document.getElementById('est-3').style.background = '#db4545';
            document.getElementById('est-4').style.background = '#7e7e7e';
            document.getElementById('est-5').style.background = '#db4545';
            document.getElementById('est-todos').style.background = '#db4545';
            break;
        case 5:
            document.getElementById('com-1estrellas').style.display = 'none';
            document.getElementById('com-2estrellas').style.display = 'none';
            document.getElementById('com-3estrellas').style.display = 'none';
            document.getElementById('com-4estrellas').style.display = 'none';
            document.getElementById('com-5estrellas').style.display = 'block';
            document.getElementById('com-todos').style.display = 'none';

            document.getElementById('est-1').style.background = '#db4545';
            document.getElementById('est-2').style.background = '#db4545';
            document.getElementById('est-3').style.background = '#db4545';
            document.getElementById('est-4').style.background = '#db4545';
            document.getElementById('est-5').style.background = '#7e7e7e';
            document.getElementById('est-todos').style.background = '#db4545';
            break;
        default:
            document.getElementById('com-1estrellas').style.display = 'none';
            document.getElementById('com-2estrellas').style.display = 'none';
            document.getElementById('com-3estrellas').style.display = 'none';
            document.getElementById('com-4estrellas').style.display = 'none';
            document.getElementById('com-5estrellas').style.display = 'none';
            document.getElementById('com-todos').style.display = 'block';

            document.getElementById('est-1').style.background = '#db4545';
            document.getElementById('est-2').style.background = '#db4545';
            document.getElementById('est-3').style.background = '#db4545';
            document.getElementById('est-4').style.background = '#db4545';
            document.getElementById('est-5').style.background = '#db4545';
            document.getElementById('est-todos').style.background = '#7e7e7e';
            break;

    }
}