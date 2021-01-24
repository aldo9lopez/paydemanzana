jQuery('input[type=file]').change(function(){
    var filename = jQuery(this).val().split('\\').pop();
    var idname = jQuery(this).attr('id');
    console.log(jQuery(this));
    if(filename.length >= 14){
        var wordorg = filename;
        filename = wordorg.substring(0,6);
        filename += '...'
        filename += wordorg.substring(wordorg.length-8,wordorg.length);
    }
    jQuery('span.'+idname).next().find('span').html(filename);
    });

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

    function darManzana(post_id,usuario_post){
        $.ajax({ url: 'model/data/dar_manzana.php',
         data: {post: post_id,
                usuario: usuario_post},
         type: 'post',
         success: function(output) {
                    check = 'manzana-'+post_id;
                    lbl = 'lbl-'+check;
                    span = 'num-man-'+post_id;
                    if(document.getElementById(check).checked==true){
                        document.getElementById(lbl).style.color = '#db4545';
                        num = parseInt(document.getElementById(span).innerText);
                        document.getElementById(span).innerText = num+1;
                    }else{
                        document.getElementById(lbl).style.color = '#3a3a3a';
                        num = parseInt(document.getElementById(span).innerText);
                        document.getElementById(span).innerText = num-1;
                    }
                }
        });
    }