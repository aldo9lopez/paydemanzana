<?php
    $query="SELECT Preferencias FROM mm_basicos WHERE Usuario=:usuario";
    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $mm_preferencias = $registro["Preferencias"];
    $consulta_pref = "(u.Sexo = 'Masculino' OR u.Sexo = 'Femenino' OR u.Sexo='Sin especificar')";

    if($mm_preferencias=='Hombres'){
        $consulta_pref = "(u.Sexo = 'Masculino' OR u.Sexo='Sin especificar')";
    }else if($mm_preferencias=='Mujeres'){
        $consulta_pref = "(u.Sexo = 'Femenino' OR u.Sexo='Sin especificar')";
    }

    $query="SELECT Usuario, (((c+d+e+f+g+h+i+j+k+l+n+o+p+q)*100)/14) as Suma FROM 
    (SELECT a.Usuario, 
    IF(a.Q1 = b.Q1 ,1,0) as c,IF(a.Q2 = b.Q2 ,1,0) as d,IF(a.Q3 = b.Q3 ,1,0) as e,
    IF(a.Q4 = b.Q4 ,1,0) as f,IF(a.Q5 = b.Q5 ,1,0) as g,IF(a.Q6 = b.Q6 ,1,0) as h,
    IF(a.Q7 = b.Q7 ,1,0) as i,IF(a.Q8 = b.Q8 ,1,0) as j,IF(a.Q9 = b.Q9 ,1,0) as k,
    IF(a.Q10 = b.Q10 ,1,0) as l,IF(r.Q1 = s.Q1 ,1,0) as n,IF(r.Q5 = s.Q5 ,1,0) as o,
    IF(r.Q8 = s.Q8 ,1,0) as p,IF(r.Q10 = s.Q10 ,1,0) as q
    FROM mm_test1 a, (SELECT * FROM mm_test1 WHERE Usuario = :usuario) b , 
    mm_test3 r, (SELECT * FROM mm_test3 WHERE Usuario = :usuario) s 
    WHERE r.Usuario = a.Usuario) m
    WHERE Usuario != :usuario AND 
    EXISTS(SELECT No_control FROM usuario u WHERE $consulta_pref AND u.No_control = m.Usuario) 
    ORDER BY Suma DESC LIMIT 1";
    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $mm_test1_usuario = $registro["Usuario"];
    $mm_test1_comp = $registro["Suma"];

    $query="SELECT Usuario, (((c+d+e+f+g+h+i+j+k+l+n+o+p+q)*100)/14) as Suma FROM 
    (SELECT a.Usuario, 
    IF(a.Q1 = b.Q1 ,1,0) as c,IF(a.Q2 = b.Q2 ,1,0) as d,IF(a.Q3 = b.Q3 ,1,0) as e,
    IF(a.Q4 = b.Q4 ,1,0) as f,IF(a.Q5 = b.Q5 ,1,0) as g,IF(a.Q6 = b.Q6 ,1,0) as h,
    IF(a.Q7 = b.Q7 ,1,0) as i,IF(a.Q8 = b.Q8 ,1,0) as j,IF(a.Q9 = b.Q9 ,1,0) as k,
    IF(a.Q10 = b.Q10 ,1,0) as l,IF(r.Q2 = s.Q2 ,1,0) as n,IF(r.Q3 = s.Q3 ,1,0) as o,
    IF(r.Q6 = s.Q6 ,1,0) as p,IF(r.Q9 = s.Q9 ,1,0) as q
    FROM mm_test2 a, (SELECT * FROM mm_test2 WHERE Usuario = :usuario) b , 
    mm_test3 r, (SELECT * FROM mm_test3 WHERE Usuario = :usuario) s 
    WHERE r.Usuario = a.Usuario) m
    WHERE Usuario != :usuario AND 
    EXISTS(SELECT No_control FROM usuario u WHERE $consulta_pref AND u.No_control = m.Usuario) 
    ORDER BY Suma DESC LIMIT 1";
    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $mm_test2_usuario = $registro["Usuario"];
    $mm_test2_comp = $registro["Suma"];

    $query="SELECT Usuario, (((c+d+e+f+g+h+i+j+k+l+cc+dd+ee+ff+gg+hh+ii+jj+kk+ll+ccc+ddd+eee+fff+ggg+hhh+iii+jjj+kkk+lll)*100)/30) as Suma FROM 
    (SELECT a.Usuario, 
    IF(a.Q1 = b.Q1 ,1,0) as c,IF(a.Q2 = b.Q2 ,1,0) as d,IF(a.Q3 = b.Q3 ,1,0) as e,
    IF(a.Q4 = b.Q4 ,1,0) as f,IF(a.Q5 = b.Q5 ,1,0) as g,IF(a.Q6 = b.Q6 ,1,0) as h,
    IF(a.Q7 = b.Q7 ,1,0) as i,IF(a.Q8 = b.Q8 ,1,0) as j,IF(a.Q9 = b.Q9 ,1,0) as k,
    IF(a.Q10 = b.Q10 ,1,0) as l, 
    IF(aa.Q1 = bb.Q1 ,1,0) as cc,IF(aa.Q2 = bb.Q2 ,1,0) as dd,IF(aa.Q3 = bb.Q3 ,1,0) as ee,
    IF(aa.Q4 = bb.Q4 ,1,0) as ff,IF(aa.Q5 = bb.Q5 ,1,0) as gg,IF(aa.Q6 = bb.Q6 ,1,0) as hh,
    IF(aa.Q7 = bb.Q7 ,1,0) as ii,IF(aa.Q8 = bb.Q8 ,1,0) as jj,IF(aa.Q9 = bb.Q9 ,1,0) as kk,
    IF(aa.Q10 = bb.Q10 ,1,0) as ll, 
    IF(aaa.Q1 = bbb.Q1 ,1,0) as ccc,IF(aaa.Q2 = bbb.Q2 ,1,0) as ddd,IF(aaa.Q3 = bbb.Q3 ,1,0) as eee,
    IF(aaa.Q4 = bbb.Q4 ,1,0) as fff,IF(aaa.Q5 = bbb.Q5 ,1,0) as ggg,IF(aaa.Q6 = bbb.Q6 ,1,0) as hhh,
    IF(aaa.Q7 = bbb.Q7 ,1,0) as iii,IF(aaa.Q8 = bbb.Q8 ,1,0) as jjj,IF(aaa.Q9 = bbb.Q9 ,1,0) as kkk,
    IF(aaa.Q10 = bbb.Q10 ,1,0) as lll
    FROM mm_test1 a, (SELECT * FROM mm_test1 WHERE Usuario = :usuario) b , 
    mm_test2 aa, (SELECT * FROM mm_test2 WHERE Usuario = :usuario) bb,
    mm_test3 aaa, (SELECT * FROM mm_test3 WHERE Usuario = :usuario) bbb 
    WHERE aa.Usuario = a.Usuario AND aaa.Usuario = a.Usuario) m
    WHERE Usuario != :usuario AND 
    EXISTS(SELECT No_control FROM usuario u WHERE $consulta_pref AND u.No_control = m.Usuario) 
    ORDER BY Suma DESC";
    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $mm_test3_usuario = $registro["Usuario"];
    $mm_test3_comp = $registro["Suma"];

    $query = "SELECT a.Nombre, a.Apellido, (SELECT Nombre_corto FROM carrera d WHERE d.Id_carrera = a.Carrera) as Carrera,
     b.Imagen_ruta, c.Signo_zodiacal, c.Redes 
    FROM usuario a, usuario_presentacion b, mm_basicos c WHERE a.No_control = :usuario
    AND a.No_control=b.Usuario AND a.No_control= c.Usuario";

    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$mm_test1_usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $mm_test1_nombre = $registro["Nombre"] . " " . $registro["Apellido"];
    $mm_test1_carrera = $registro["Carrera"];
    $mm_test1_foto = $registro["Imagen_ruta"];
    $mm_test1_signo = $registro["Signo_zodiacal"];
    $mm_test1_redes = $registro["Redes"];

    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$mm_test2_usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $mm_test2_nombre = $registro["Nombre"] . " " . $registro["Apellido"];
    $mm_test2_carrera = $registro["Carrera"];
    $mm_test2_foto = $registro["Imagen_ruta"];
    $mm_test2_signo = $registro["Signo_zodiacal"];
    $mm_test2_redes = $registro["Redes"];

    $resultado=$base->prepare($query);
    $resultado->bindValue(":usuario",$mm_test3_usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $mm_test3_nombre = $registro["Nombre"] . " " . $registro["Apellido"];
    $mm_test3_carrera = $registro["Carrera"];
    $mm_test3_foto = $registro["Imagen_ruta"];
    $mm_test3_signo = $registro["Signo_zodiacal"];
    $mm_test3_redes = $registro["Redes"];

    function fraseZodiaco($signo){
        switch($signo){
            case 'Aries':
                return 'Ten cuidado es <b>Aries</b>';
            case 'Tauro':
                return 'Y además es <b>Tauro</b> <3';
            case 'Géminis':
                return 'Te advertimos que es <b>Géminis</b>';
            case 'Cáncer':
                return 'Es <b>Cáncer</b> no lo pienses más';
            case 'Leo':
                return 'Pero con un <b>Leo</b> no se juega';
            case 'Virgo':
                return 'Piensalo bien, es <b>Virgo</b>';
            case 'Libra':
                return 'Lastima que sea <b>Libra</b>';
            case 'Escorpio':
                return 'Buenas noticias, es <b>Escorpio</b>';
            case 'Sagitario':
                return 'Sólo ten en cuenta que es <b>Sagitario</b>';
            case 'Capricornio':
                return 'Lo único malo es que es <b>Capricornio</b>';
            case 'Acuario':
                return 'Es <b>Acuario</b>, que suerte tienes';
            case 'Piscis':
                return 'El que sea <b>Piscis</b> no esta tan mal';
        }
        return null;
    }
?>