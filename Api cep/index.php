<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Consulta CEP</title>
</head>
<body>
     <h1>CONSULTA CEP</h1>
     <form action="index.php" method="GET">
       Digite o CEP: <input type="text" name="cep" riquere><br>
       <button type="submit">ENVIAR</button>
     </form>
     <br>
     <br>
     
</body>
</html>


<?php
require __DIR__.'/vendor/autoload.php';

use \App\WebService\ViaCEP;

//recebe via GET o cep digitado na url pelo usuario
@$cep = $_GET['cep'];

$dadosCEP = ViaCEP:: consultaCEP($cep);

//exibe resultado da solicitação
 echo '<b>CEP: </b> ',$dadosCEP['cep'] ,'<br>', 
      '<b>LOGRADOURO: </b> ',$dadosCEP['logradouro'],'<br>',
      '<b>BAIRRO: </b>', $dadosCEP['bairro'],'<br>',
      '<b>LOCALIDADE: </b>', $dadosCEP['localidade'],'<br>',
      '<b>UF: </b>',$dadosCEP['uf'],'<br>',
      '<hr>';

      