<?php
    require_once "producte.php";
    session_start();

    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $u = $_SESSION['user'];
        if ($id == TRUE){            
            echo '<h2>Benvingut, ' .$u.'</h2><br>';                        
        }else{
            header("location: login.html");
        }
    }

    if(isset($_SESSION["carro"])){
        $carro = $_SESSION["carro"]; ?>

        <head>
            <meta charset="utf-8" />
            <title>EL CHIRINGUITO</title>
            <link rel=StyleSheet href="css/menu.css" type="text/css" media=all>
            <link rel=StyleSheet href="css/carrito.css" type="text/css" media=all>
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
        <h1>Carro de la compra</h1>
        <table class="tabla">
            <tr>
                <th>Foto</th>
                <th>Nom</th>
                <th>Descripcio</th>
                <th>Preu</th>
                <th>Esborrar</th>
            </tr>

            <?php $total = 0 ;

            foreach($carro as $p){ ?>
                <tr>
                    <td><center><img src=<?php echo $p->__get("foto"); ?> width="200" height="200"></center></td>
                    <td><center><?php echo $p->__get("nom"); ?></center></td>
                    <td><center><?php echo $p->__get("descripcio"); ?></center></td>
                    <td><center><?php echo $p->__get("preu"). ' €'; ?></center></td>
                    <?php $total += $p->preu ; ?>
                    <td>
                        <form action="esborrar.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $p->__get("id"); ?>">
                            <center><button type="submit" class="button button3">Esborrar</button></center>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="4"><b>Total:</b></td>
                <td><center><?php echo '<b>'.$total . ' € </b>'; ?></center></td>
            </tr>
        </table>
        <form action="comanda.php" method="POST">
            <center><button type="submit" >Guardar Comanda</button></center>
        </form>
    <?php }else{ ?>
        <head>
            <meta charset="utf-8" />
            <title>EL CHIRINGUITO</title>
            <link rel=StyleSheet href="css/menu.css" type="text/css" media=all>
            <link rel=StyleSheet href="css/carrito.css" type="text/css" media=all>
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
        <h1>Carro de la compra</h1></br></br></br></br>
        <p>No hi ha productes al teu carro de la compra</p>
    <?php }

?>