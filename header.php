<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180760021-1"></script>
  <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
   gtag('config', 'UA-180760021-1');
  </script>
  <!--Libreria de animación de textos -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>
<nav id="site-navbar" class="w-100">
  <div class="container-fluid px-5">
    <?php b4st_navbar_brand();?>
    <i class="fas fa-bars text-white accion-menu text-servicio"></i>
  </div>
</nav>

<div class="menu-custom vh-100 esconde-menu">
  <i class="fas fa-times accion-menu text-white"></i>
  <div class="contacto-menu col d-flex flex-wrap justify-content-center align-items-center p-2 p-md-1">
    <div class="seccion-datos">
      <p class="titulo-contacto">Contacto</p>
      <p>Joaquín Montero 3000, Oficina 502,</p>
      <p>Vitacura. Santiago, Chile.</p>
      <p class="datos">Santiago Chile.</p>
      <p>+56 (2) 2869 9180</p>
      <a href="mailto:contacto@rocketmkt.com">contacto@rocketmkt.com</a>
    </div>
    <div class="seccion-redes"></div>
  </div>
  <div class="opciones-menu col-md-9 m-auto d-flex flex-column justify-content-around align-items-start">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="accion-menu">Home</a>
      <a href="<?php echo esc_url( home_url('/servicios/posicionamiento-en-buscadores/') ); ?>" class="accion-menu">Servicios</a>
      <a href="<?php echo esc_url( home_url('/#clientes') ); ?>" class="accion-menu">Clientes</a>
      <a href="<?php echo esc_url( home_url('/casos') ); ?>" class="accion-menu">Casos de éxito</a>
      <a href="<?php echo esc_url( home_url('/#contacto') ); ?>" class="accion-menu">Contacto</a>
  </div>
</div>
<?php b4st_navbar_after();?>