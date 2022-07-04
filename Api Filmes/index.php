<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosumo de API</title>
</head>
<body>
    <?php
        //url da API a ser acessada
        $url = "https://swapi.dev/api/people/?page=3";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //converte resultado
        $resultado = json_decode(curl_exec($ch));

        //exibindo resultados
        foreach($resultado->results as $ator){
            echo "<b>Nome: </b>".$ator->name."<br>";
       //convertendo o e Sexo no idioma INGLÊS para PORTUGUÊS     
            if($ator->gender == "male"){
                $ator->gender = "Masculino";
            echo "<b>Gênero: </b>".$ator->gender."<br>";
            }
            elseif($ator->gender =="female"){
                $ator->gender = "Femenino";
                echo "<b>Gênero: </b>".$ator->gender."<br>"; 
            }else{
                $ator->gender = "Indefinido";
                echo "<b>Gênero: </b>".$ator->gender."<br>";
            }
            //Ajustando resultado da idade para exibir apenas números
            echo substr("<b>Idade: </b>".$ator->birth_year."",0,-3); echo"  Anos";
            echo "<br>";
            
        
            //Conta a quantidade de filmes que o personagem aparece.    
                $count = count($ator->films);
                echo "<b>Filmes:</b> ".$count."<br>";
            
             
            
            echo"<hr>";
        }

    ?>
    
</body>
</html>