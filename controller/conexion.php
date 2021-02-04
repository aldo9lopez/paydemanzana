<?php
    try{
        //$base = new PDO('mysql:host=localhost; dbname=paydmanz_ana','paydmanz_aldolopez','slFD_SaS.fr23!dfD');
        $base = new PDO('mysql:host=localhost; dbname=pay_de_manzana','root','');
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");
    }catch(Exception $e){
        die('Error' . $e->getMessage());
        echo "linea del error" . $e->getLine();
    }
?>