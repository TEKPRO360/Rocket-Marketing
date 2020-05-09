<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>
<nav id="site-navbar" class="w-100">
  <div class="container-fluid">
    <?php b4st_navbar_brand();?>

    <i class="fas fa-bars text-white accion-menu"></i>
  </div>
</nav>

<div class="menu-custom vh-100 esconde-menu">
  <i class="fas fa-times accion-menu text-white"></i>
  <div class="contacto-menu col d-flex flex-wrap justify-content-center align-items-center p-2 p-md-1">
    <div class="seccion-datos">
      <p class="titulo-contacto">Contacto</p>
      <p class="datos">JOAQUÍN Montero 3000</p>
      <p class="datos">oficina 302, Vitacura.</p>
      <p class="datos">Santiago Chile.</p>
      <p class="telefono-contacto"><a href="tel:+569123456789">+569123456789</a></p>
      <p class="mail-contacto"><a href="mailto:rocket.mkt@tekpro.cl">rocket.mkt@tekpro.cl</a></p>
    </div>
    <div class="seccion-redes"></div>
  </div>
  <div class="opciones-menu col-md-9 m-auto d-flex flex-column justify-content-around align-items-start">
      <a href="">Home</a>
      <a href="">Servicios</a>
      <a href="">Clientes</a>
      <a href="">Casos de éxito</a>
      <a href="">Contacto</a>
  </div>
</div>
<?php b4st_navbar_after();?>