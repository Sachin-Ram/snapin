<?php
include 'library/load.php';
?>
<!doctype html>
<html lang="en">
  <?php load_template('_headload');?>
  <body>
    


  <?php load_template('_header'); ?>



<main>

  
    <?load_template('_calltoaction'); ?>
      
    <?load_template('_photos');?>



</main>

<?load_template('_footer');?>


    <script src="/photogram/assets/dist/js/bootstrap.bundle.min.js"></script>
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function() {
  console.log('jQuery is working!');
});

function likeImage(imageId) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'like_image.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('like-count-' + imageId).innerHTML = xhr.responseText;
        } else {
            console.log('Request failed.  Returned status of ' + xhr.status);
        }
    };
    xhr.send('image_id=' + imageId);
}

      </script>
  </body>
</html>
