<?php
    require_once "producte.php";

    $p = new Producte($_POST["id"],$_POST["nom"],$_POST["desc"],$_POST["foto"],$_POST["preu"]);    

    session_start();
    if(isset($_SESSION["carro"])){
        $carro = $_SESSION["carro"];
    }else{
        $carro = array();
    }

    array_push($carro,$p);
    $_SESSION["carro"] = $carro;

    header("location: index.php");
?>