<?php
    $u = $_POST['usuari'];
    $p = $_POST['clau'];
    $fitxer = fopen('login.txt','r');

    if (!$fitxer) {
        echo 'ERROR: No ha estat possible accedir al fitxer.'; 
        exit;
    }

    $loop = 0;
    while (!feof($fitxer)) { 
        $loop++;
        $line = fgets($fitxer);
        $limit = substr_count($line, "//");
        $field[$loop] = explode ("//", $line);
        $fitxer++;
    }

    fclose($fitxer);
    $login = $u.', '.$p;
    $fitxer = fopen('login.txt','r');

    fclose($fitxer);
    for($i=0;$i<$limit;$i++){
        if ($login == $field[$loop][$i]) {
            session_start();
            $_SESSION['id']= TRUE;
            $_SESSION['user'] = $u;
            header("location: index.php");
            break;
        }
    }
    if($login != $field[$loop][$i]){
        header("location: login.html");
    }  

?>
     
