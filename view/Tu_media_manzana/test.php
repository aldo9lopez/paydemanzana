<div class="espacio">
    <div class="area">
        <div class="principal-info">
            <?php
                switch($test_tipo){
                    case 1: require_once("../view/Tu_media_manzana/test_corazon.php");break;
                    case 2: require_once("../view/Tu_media_manzana/test_mente.php");break;
                    case 3: require_once("../view/Tu_media_manzana/test_personal.php");break;
                }
            ?>
        </div>
    </div>
</div>