<?php
require __DIR__.'/vendor/autoload.php';

use \App\WebService\ViaCEP;

//recebe via GET o cep digitado na url pelo usuario
$cep = $_GET['cep'];

$dadosCEP = ViaCEP:: consultaCEP($cep);

//exibe resultado da solicitação
 echo '<b>CEP: </b> ',$dadosCEP['cep'] ,'<br>', 
      '<b>LOGRADOURO: </b> ',$dadosCEP['logradouro'],'<br>',
      '<b>BAIRRO: </b>', $dadosCEP['bairro'],'<br>',
      '<b>LOCALIDADE: </b>', $dadosCEP['localidade'],'<br>',
      '<b>UF: </b>',$dadosCEP['uf'],'<br>',
      '<hr>';

      