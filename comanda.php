<?php
    require_once "producte.php";

    session_start();
    if(isset($_SESSION["carro"])){
        $carro = $_SESSION["carro"];
    }

    $fitxer = fopen("comanda.txt","a");

    foreach($carro as $p){
        fwrite($fitxer, $p->__get("nom").": ".$p->__get("descripcio")."\r\n");
    }
    
    session_destroy();

    header("location: carro.php");
?>