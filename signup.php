<?php
include 'library/load.php';
?>
<!doctype html>
<html lang="en">
  <?load_template('_headload')?>


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
    

  <?php load_template('_header'); ?>


<main>

  
    <?load_template('_signup'); ?>
      




</main>

<?load_template('_footer');?>


    <script src="/photogram/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
