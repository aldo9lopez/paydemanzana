<?php
    function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' ){
        $datetime1 = date_create($date_1);
        $datetime2 = date_create($date_2);
       
        $interval = date_diff($datetime1, $datetime2);
       
        return $interval->format($differenceFormat);
       
    }

    function obtenerFecha($date_1 , $date_2){
        if(dateDifference($date_1,$date_2)=='0'){
            if(dateDifference($date_1,$date_2,'%h')=='0'){
                if(dateDifference($date_1,$date_2,'%i')=='0'){
                    return 'Hace un momento';
                }else{
                    return dateDifference($date_1,$date_2,'%i min');
                }
            }else{
                return dateDifference($date_1,$date_2,'%h h');
            }
        }else{
            return dateDifference($date_1,$date_2,'%a d');
        }
    }

?>