<?php
    require_once "producte.php"; 

    $id = $_POST["id"];

    session_start();
    if(isset($_SESSION["carro"])){
        $carro = $_SESSION["carro"];
    }

    foreach($carro as $i=>$p){
        if($p->__get("id") == $id){
            unset($carro[$i]);
            break;
        }
    }

    $_SESSION["carro"] = $carro;

    header("location: carro.php");
?>