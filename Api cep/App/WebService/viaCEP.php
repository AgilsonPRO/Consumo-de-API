<?php

namespace App\WebService;

class VIaCEP{

    public static function consultaCEP($cep){
    
        //validando cep
        if(strlen($cep) < 8){
        echo "Digite um CEP Válido <br><br>";
        exit();
        }
        
        $curl = curl_init();
        //url da API a ser acessada
        curl_setopt_array($curl,[CURLOPT_URL=>'https://viacep.com.br/ws/'.$cep.'/json/',
        CURLOPT_RETURNTRANSFER=>TRUE,
        CURLOPT_CUSTOMREQUEST=>'GET']);

        $response = curl_exec($curl);
        //encerra conexão
        curl_close($curl);
        //converte o resultado 
        $array =json_decode($response,true);
        
        //Verifica se o retorno é valido
        if(count($array) <= 1){
            echo "CEP Não encontrado, tente novamente.";
            exit();
        }
        return $array;
    }

}