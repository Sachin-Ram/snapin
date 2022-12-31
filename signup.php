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

    

    <!-- Bootstrap core CSS -->
<link href="/photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" rel="stylesheet">


   <style>
        .form-signup {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
       
        .form-signup .form-floating:focus-within {
            z-index: 2;
        }
        .form-signup input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signup input[type="password"] {
            /* margin-bottom: 10px; */
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
 </style>
    
  </head>
  <body>
    
<header>
<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php load_template('_header'); ?>

</header>

<main>

  
    <?load_template('_signup'); ?>
      




</main>

<?load_template('_footer');?>


    <script src="/photogram/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
