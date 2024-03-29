<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Menu principal</title>
</head>
<body>
    


<header class="header">
    <div class="menu container">
        <a href="#" class="logo">Logo</a>
        <input type="checkbox" id="menu" />
        <label for="menu">
            <img src="../assets/images/menu.png" class="menu-icono" alt="menu">
        </label>


<nav class="navbar">
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">inicio sesion</a></li>
    </ul>

</nav>
</div>
        <!--aqui termina el menu princiál-->



<div class="header-content container">
    <div class="header-txt">
        <h1>Medical center</h1>
       <p>
       Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
         cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
       </p>
       <a href="#" class="btn-1">informacion</a>
    </div>

    <div class="header-img">
        <img src="../assets/images/left.png" alt="">
    </div>

</div>
    

</header>




<section class="about container">
<div class="about-img">
    <img src="../assets/images/about.png"  alt="">
</div>

<div class="about-txt">
    <p>
       Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
         cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.    
    </p>

<br>

     <p>
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
         cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.    
    </p>
</div>
</section>


<main class="servicios">
    <h2>Servicios</h2>
 <div class="servicios-content conatiner">

    <div class="servicios-1">
        <i class="fa-sharp fa-solid fa-hospital-user"></i>
         <h3>pediatria</h3>
    </div>

    <div class="servicios-1">
        <i class="fa-solid fa-bed-pulse"></i>
         <h3>ginecologias</h3>
    </div>

    <div class="servicios-1">
        <i class="fa-sharp fa-solid fa-stethoscope"></i>
         <h3>dermatologia</h3>
    </div>

    <div class="servicios-1">
        <i class="fa-solid fa-hospital"></i>
         <h3>cardiologia</h3>
    </div>
</main>


<section class="formulario container">
    
    <form  method="post" autocomplete="off">
      <h2>Agenda consulta</h2>
      <div class="input-group">
        
      <div class="input-container">
        <input type="text" name="name" placeholder="nombre y apellido">
        <i class="fa-solid fa-user"></i>
      </div>

      <div class="input-container">
        <input type="tel" name="phone" placeholder="telefono celular">
        <i class="fa-solid fa-phone"></i>
      </div>

      <div class="input-container">
        <input type="email" name="email" placeholder="correo">
        <i class="fa-solid fa-envelope"></i>
      </div>

      <div class="input-container">
        <textarea name="message" placeholder="detalles d ela consulta"></textarea>
      </div>
        
      <input type="submit" name="send" class="btn" onClick="myfunction()">

      </div>
      

    </form>

</section>




<footer class="footer">
    <div class="footer-content container">
        
        <div class="link">
                <a href="#" class="logo">Logo</a>
        </div>

        <div class="link">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Inicio</a></li>
            </ul>

        </div>

    </div>

</footer>


<!--
<?php
include("mensajeria.php");
?>

<style>
     {
        position: relative;
    }
</style>




<script>
    function myFunction() {
        windows.location.href="https://localhost/Hospital"
    }
</script>
-->
<p align="center" >©Todos los derechos reservados Angel Ulises imenez Carrales 03/03/2024</p>
      
</body>
</html>