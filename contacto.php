<?php
$conectar= @mysqli_connect('localhost','axaveracruz16','axaveracruz1','comentarios');

if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
?>
<!DOCTYPE html>
<html>
    <center>
    <title>Contacto</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Axa agente de seguros</title>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <link href="css/bootstrap.min.css">  
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/aos.css">   
  
</head>  
    </center>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
 <header>
            
<nav>
           <a href="index.html">Inicio</a>
            <a href="historia.html">Historia</a>
            <a href="servicios.html">Seguros</a>
            <a href="cotiza.html">Cotización</a>
            <a href="contacto.html">Contacto</a>
    
        </nav>
       
        <section class="textos-header">
            <div data-aos="fade-up">
            <h1 class="icon-street-view">¡CONTACTANOS!</h1>
            <p>¡Somos tu mejor opción!</p>
</div>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: rgb(245, 240, 240);"></path>
            </svg></div>
    </header>
</center>
<footer id="footer">
    <div class="inner">
        <section>
            <h2>Buzón de comentarios o sugerencias</h2>
            <br>
              <form method="POST">
                <div class="fields">
                    <div class="field half">
                        <input type="name" name="nombre" id="nombre" placeholder="Ingrese su nombre completo" required/>
                    </div>
                    <div class="field half">
                        <input type="tel" name="telefono" id="telefono" placeholder="Ingrese su número telefonico" />
                    </div>
                    <div class="field half">
                        <input type="email" name="email" id="email" placeholder="Ingrese su correo electronico" required/>
                    </div>
                    <div class="field">
                        <textarea name="comentario" id="mensaje" placeholder="Deje su mensaje aquí" required></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" name="Enviar" value="Enviar"/></li>
                    <br>
                </ul>
                    <?php
if(isset($_POST["Enviar"])){
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$comentario=$_POST["comentario"];
$insertar= "INSERT INTO mensajes VALUES('$nombre','$telefono','$email','$comentario')";
$ejecutar= mysqli_query($conectar,$insertar);
if(!$ejecutar){
echo"Hubo un error";
}else{
echo"<h2 class='texto_bd'>Datos Guardados</h2>";
}
}
?>
            </form>
        </section>
        <section>
            <right><h2>Siguenos en</h2></rigth>
                <br>
            <ul class="redes">
             <li class="facebook"><a href="https://www.facebook.com/AgenciaDeSegurosTadeo.AlianzasComerciales/"><img src="img/facebook.png" width="50" right="350"/></a></li>
             <li class="twitter"><a href="https://twitter.com/AxaSeguros8/"><img src="img/twitter (1).png" width="50" right="50"/></a></li>
            
             <li class="instagram"><a href="https://www.instagram.com/axaseguros_/"><img src="img/instagram.png" width="50" right="50"/></a></li>
             
             <li class="telefono"><a href="https://api.whatsapp.com/send?phone=522871025900"><img src="img/whatsapp.png" width="50" right="50"/></a></li>
            </ul>
            </section>
    </div>
</footer>
<section>
    <center>
    <h2>Ubicación de la empresa</h2>
    <br>
 <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60302.44550076608!2d-96.14328556044187!3d19.155729662654522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x85c340e04fd1e8ad%3A0x4a4518c85feda577!2sBv.%20Adolfo%20Ru%C3%ADz%20Cortines%201517%2C%20Costa%20de%20Oro%2C%2094299%20Veracruz%2C%20Ver.!3m2!1d19.1556519!2d-96.10826589999999!5e0!3m2!1ses-419!2smx!4v1610503333333!5m2!1ses-419!2smx" width="600"; height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
</center>
</section> 
   <br> 
        <h2 class="titulo-final">&copy; Arlette Posada | Brenda Arano</h2>
        <script>
   AOS.init();
 </script>
     </body>
</html>
