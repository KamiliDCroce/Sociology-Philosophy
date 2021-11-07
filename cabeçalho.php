<?php
function ativa($nome_pagina){

   if(basename($_SERVER["PHP_SELF"]) == $nome_pagina){
       return " active ";
   }else{
       return null;
   }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>

    <meta charset="UTF-8">
    <meta name="author" content="Kamili Croce">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cabeçalho</title>

    <!-- Icon Page -->
    <link rel="icon" href="../Projeto Interdisciplinar/images/logo.png" >

    <!-- Css -->
    <link rel="stylesheet" href="main.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
        <body>  

                <div id="container">
                    <img id="symbol" src="images/logocontainer.png">
                </div>

                <div id="menu">
                    <p id="Hdistance"> <a href="home.php">Home</a> </p>            
                    <p> <a href="inicio.php">Início</a> </p>                     
                    <p>  <a href="podcast.php">PodCast</a> </p>       
                    <p>  <a href="video.php">Vídeo</a> </p>
                </div>

    