<?php
    require_once "producte.php";
    
    session_start();
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $u = $_SESSION['user'];
        if ($id == TRUE){            
            echo '<h2>Benvingut, '.$u.'</h2>';                        
        }else{
            header("location: login.html");
        }
    }
?>
<html lang="ca">
    <head>   
        <meta charset="utf-8" />
        <title>EL CHIRINGUITO</title>
        <link rel=StyleSheet href="css/menu.css" type="text/css" media=all>
        <link rel=StyleSheet href="css/index.css" type="text/css" media=all>
    </head>
    <body>
        <a name="arriba"> </a>
        <nav id="header" >
            <ul class="nav">
                <li><a href="index.php">INICIO</a></li>	
                <li><a href="carro.php">CARRITO</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </nav></br></br></br></br></br></br>
        <center><h1></h1></center>
            <?php foreach($productos as $p){ ?>
            <div class="contenedor1">
                <h2><u><b><?php echo $p->__get("id"); ?>. <?php echo $p->__get("nom"); ?></b></u></h2>
                <img class ="imagen"  src=<?php echo $p->__get("foto"); ?> width="200" height="200"> 
                <p class="parrafo"><?php echo $p->__get("descripcio"); ?></p></br>
                <form action="afegir.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $p->__get("id"); ?>">
                    <input type="hidden" name="nom" value="<?php echo $p->__get("nom"); ?>">
                    <input type="hidden" name="desc" value="<?php echo $p->__get("descripcio"); ?>">
                    <input type="hidden" name="foto" value="<?php echo $p->__get("foto"); ?>">
                    <input type="hidden" name="preu" value="<?php echo $p->__get("preu"); ?>"></br>
                    <button type="submit" class="button button3">Afegir al Carro</button></br>
                </form>
            </div><?php } ?>
        <center></br></br>
            <a href="#arriba">
                <img src="imagenes/flecha.png" width="120" height="120" >
            </a></br></br>
			<footer>
                <p><font color="#fff">Desarrollador Web: Guillem Perez & José Suárez</br>
				Informacion de Contacto:<a href="mailto:15584684.clot@fje.edu">
                15584684.clot@fje.edu</a></font></p></br>
			</footer>
		</center>
    </body>
</html>
    </body>
</html>
