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
   $char = substr_count($line, '//');
   $field[$loop] = explode ("//", $line);
   $fitxer++;
   }
   fclose($fitxer);

   $fitxer = fopen('login.txt','r');
   $limit = $char;
   fclose($fitxer);
   $login = $u.', '.$p;
   for($i=0;$i<$limit;$i++){       
      if ($login == $field[$loop][$i]) {
         echo 'Aquest usuari ja existeix';
         header("location: login.html");
         break;
      }  
   }
   
   if ((strpos($u,"@")!=false) && (strpos($u,".")!=false) &&  $u!=""  ) {
      if( preg_match('~[A-Z]~', $p) && preg_match('~[a-z]~',$p) && preg_match('~\d~',$p) && (strlen($p) >= 6) ) {
         if($login != $field[$loop][$i]){
            $fitxer = fopen('login.txt','a');
            if (!$fitxer) {
               echo 'ERROR: No ha estat possible accedir al fitxer.'; 
               header("location: login.html");
            }
            fwrite($fitxer, $u.', '.$p.'//');
            fclose($fitxer);
            echo "L'usuari ha estat creat amb èxit";
            session_start();
            $_SESSION['user'] = $u;
            $_SESSION['id'] = TRUE;
            header("location: index.php");
         }
      }else{
         echo 'La contrasenya introduida no és vàlida. Ha de contenir com a mínim 6 caràcters alfanumèrics.';
         header("location:login.html");
      }
   }else{
      echo 'El correu introduit no és vàlid.';
      header("location:login.html");
   }
?>

             
            
