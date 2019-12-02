<?php

    class Producte{

        private $id;
        private $nom;
        private $descripcio;
        private $foto;
        private $preu;

        public function __construct($i,$n,$d,$f,$p){
            $this->id = $i;
            $this->nom = $n;
            $this->descripcio = $d;
            $this->foto = $f;
            $this->preu = $p;
        }

        public function __set($atr,$val){
            if(property_exists($this,$atr)){
                $this->$atr = $val;
            }
        }

        public function __get($atr){
            if(property_exists($this,$atr)){
				return $this->$atr;
			}
			else{
				return -1;
			}	
        }
    }

    $p1 = new Producte(1, "iPhone 11 Pro", "Sistema operativo:</br>IOS</br>Tamaño de pantalla:</br>5,8 pulgadas</br>
    Fecha de lanzamiento:</br>Septiembre 2019</br>Dimensiones:</br>144 mm / 71,4 mm / 8,1 mm </br>Preu:</br>1159 €</br>", "imagenes/p1.jpg", 
    1159);

    $p2 = new Producte(2, "Samsung Galaxy Note 9", "Sistema operativo:</br> Android</br> Tamaño de pantalla:</br>
    6,4 pulgadas</br> Fecha de lanzamiento:</br> Agosto 2019</br> Dimensiones:</br> 144 mm / 71,4 mm / 8,1 mm </br>Preu:</br>1008 €</br>",
    "imagenes/p2.jpg", 1008);

    $p3 = new Producte(3, "Sony Xperia XZ3", "Sistema operativo:</br> Android</br> Tamaño de pantalla:</br>
    6 pulgadas</br> Fecha de lanzamiento:</br> Agosto 2018</br> Dimensiones:</br> 158 mm / 73 mm / 9,9 mm</br>Preu:</br>799 €</br>", 
    "imagenes/p3.jpg", 799);

    $p4 = new Producte(4, "Redmi Note 8", "Sistema operativo:</br> Android</br> Tamaño de pantalla:</br>
    6,3 pulgadas</br> Fecha de lanzamiento:</br> Agosto 2019</br> Dimensiones:</br> 158,3 mm / 75,3 mm / 8,4 mm</br>Preu:</br>209 €</br>", 
    "imagenes/p4.jpg", 209);

    $p5 = new Producte(5, "Xiaomi Mi Note 10", "Sistema operativo:</br> Android</br> Tamaño de pantalla:</br>
    6,5 pulgadas</br> Fecha de lanzamiento:</br> Noviembre 2019</br> Dimensiones:</br> 157,8 mm / 74,2 mm / 9,7 mm</br>Preu:</br>549 €</br>", 
    "imagenes/p5.jpg", 549);

    $p6 = new Producte(6, "Motorola Moto G8 Plus", "Sistema operativo:</br> Android</br> Tamaño de pantalla:</br>
    6,3 pulgadas</br> Fecha de lanzamiento:</br> Octubre 2019</br> Dimensiones:</br> 158,4 mm / 75,8 mm / 9,1 mm</br>Preu:</br>269 €</br>", 
    "imagenes/p6.jpg", 269);

    $productos = array($p1,$p2,$p3,$p4,$p5,$p6);

?>