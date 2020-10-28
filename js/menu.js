$(document).ready(main);

var contador = 1;

function main(){
    $('.menu_bar').click(function(){
        //$('nav').toggle();

        if(contador==1){
            $('.sidebar').animate({
                left: '0'
            });
            $('.menu_bar').animate({
                left: '300px'

            });
            contador=0;
        }else{
            contador=1;
            $('.sidebar').animate({
                left: '-100%'
            });
            $('.menu_bar').animate({
                left: '0px'
            });
        }
    });
};