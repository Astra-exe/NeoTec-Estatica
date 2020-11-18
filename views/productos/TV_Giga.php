<?php

/*
   Copyright © 2020 Ricardo García Jiménez, Juan José Ramírez Martínez,
                    Esteban López Elizarraraz

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

	require_once('../../libs/check-session.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="icon" type="image/jpg" href="../img/LogoNeoTec.png" />
    <script src="https://kit.fontawesome.com/502b050bab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/catalogo.css">    
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav>
            <img src="../../Images/LogoNeoTecWhite.png" alt="logo Neotec" class="logo">
            <a href="../../index.html">Inicio</a>
            <a href="../catalogo.php">Catálogo</a>
            <a href="../closeSession.php">Cerrar Sesión</a>
			<a href="#"><?php print "{$_SESSION['user-username']}";?></a>
        </nav>
    </header>
<!-------------------------------Articulo----------------------------------->
    <div class="headingx">
        <h1> Tarjeta de Video Gigabyte NVIDIA GeForce GTX 1660 OC, 6GB 192-bit GDDR5, PCI Express x16 3.0 </h1>
    </div> 
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-gridx">
                    <div class="product-imagenx">
                        <a href="#">
                            <img loading="lazy" src="../img/img2.PNG" class="foto1">
                            <img loading="lazy" src="../img/img2_2.PNG" class="foto2">
                        </a>
                        <span class="etiqueta-disponible">STOCK</span>
                        <ul class="social">
                            <li><a href="#" data-tip="Agregar al carrito"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a href="#" data-tip="Favoritos"><i class="fa fa-heart"></i></a></li>
                            <li><a href="https://twitter.com/intent/tweet?text=Deberías%20revisar%20este%20articulo%20está%20en%20descuento%20en%20Conffort" target="blank_" data-tip="Compartir"><i class="fa fa-share"></i></a></li>
                            <li><a href="#" data-tip="Vista Rápida"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="derecha">
                <div class="contenido-producto">
                    <h3 class="titulo"><a href="#"></a>Tarjeta de Video Gigabyte NVIDIA GeForce GTX 1660 OC, 6GB 192-bit GDDR5, PCI Express x16 3.0</h3>
                    <div class="precio">$5519.00</div>
                    <hr>
                </div> 
                <div class="caracteristicas">
                    <h3>Caracteristicas</h3>
                    <ul class="carac">
                        <li>Frecuencia del procesador: <b>1830 MHz</b></li>
                        <li>Núcleos CUDA: <b>1408</b></li>
                        <li>Cantidad de puertos HDMI: <b>1</b></li>
                        <li>Cantidad de puertos DVI-I: <b>0</b></li>
                        <li>Cantidad de DisplayPorts: <b>3</b></li>
                    </ul>
                    <hr>
                    <br>
                    <form method="post" action="../../controllers/comprarController.php">
                       <div>
                           <label for="product-name">Producto: </label>
                           <input name="product-name" class="form-input"  type="text" readonly value="Tarjeta de Video Gigabyte NVIDIA GeForce GTX 1660 OC" />
                       </div>
                       <div>
                            <label for="product-quantity">Cantidad: </label>
                           <input name="product-quantity" class="form-input"  type="number" value="1" />
                       </div>
                       <div>
                            <label for="product-price">Precio: </label>
                           <input name="product-price" class="form-input" type="number" readonly value="5519" />
                        </div>
                        <input type="submit" class="log-in" value="Pedir">
                   </form> 
                </div>
                
            </div>
        </div>
    </div>
<!-------------------------------Articulo----------------------------------->
   <footer class="footer">
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p>4623085130</p>
            </div>
            <div class="content-foo">
                <h4>E-mail</h4>
                <p>contacto@NeoTec.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicación</h4>
                <p>Guanjuato, México.</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; NeoTec | Design with 💓 by <a href="https://www.instagram.com/astra_exe/" target="blank_">NeoTec</a></h2>
    </footer>
    </div>
</body>
</html>