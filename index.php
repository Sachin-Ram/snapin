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

$(document).ready(function() {
  $('.like-button').click(function() {
    var postId = $(this).closest('.col').data('post-id'); // Get the ID of the post
    var likeCount = $(this).closest('.card-body').find('.like-count'); // Get the element that displays the like count

    // Send an AJAX request to the server to update the like count
    $.ajax({
      url: 'count.php',
      method: 'POST',
      data: {postId: postId},
      success: function(data) {
        console.log(data);
        console.log(data);
        var likeCount = parseInt(data);
        if (!isNaN(likeCount)) {
      // Update the like count element
      like-count.text(likeCount + " likes");
    } else {
      // Handle the undefined like count
      like-count.text("0 likes");
    }
      },
      error: function() {
        alert('An error occurred while updating the like count.');
      }
    });
  });
});


      </script>
  </body>
</html>
