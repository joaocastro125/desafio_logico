<?php

 try{
    $pdo=new PDO('mysql:host=localhost;dbname=desafio_logico',"root","");

 }catch(Exception $e){
    echo "<strong>ERRO DETECTADO:</strong>",$e->getMessage();

 }