<?php
include 'library/load.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SACHIN">
    <meta name="generator" content="Hugo 0.84.0">
    <title>PHOTOGRAM</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="/photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>

  <div class="collapse bg-dark" id="navbarHeader">
  </div>
  <?php load_template('_header'); ?>

</header>

<main>

  
    <?load_template('_calltoaction'); ?>
      
    <?load_template('_photos');?>



</main>

<?load_template('_footer');?>


    <script src="/photogram/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
