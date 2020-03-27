<?php
    //Essa função gera um valor de String aleatório do tamanho recebendo por parametros
    function randString($size){
        //String com valor possíveis do resultado, os caracteres pode ser adicionado ou retirados conforme sua necessidade
        $basic = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $return= "";

        for($count= 0; $size > $count; $count++){
            //Gera um caracter aleatorio
            $return.= $basic[rand(0, strlen($basic) - 1)];
        }

        return $return;
    }

    //Imprime uma String randônica com 20 caracteres
   
//echo randString(4),"-",randString(4),"-",randString(4),"-",randString(4);
?>