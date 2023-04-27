// Get all "Like" buttons on the page
var likeButtons = document.querySelectorAll('.like-button');
console.log("test");
// Loop through each "Like" button and add a click event listener
likeButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    var postId = this.closest('.col').dataset.postId; // Get the ID of the post
    var likeCount = this.closest('.card-body').querySelector('.like-count'); // Get the element that displays the like count
  
    // Send an AJAX request to the server to update the like count
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        // Update the like count in the UI
        likeCount.textContent = JSON.parse(this.responseText).likes + ' likes';
      } else if (this.readyState === 4) {
        // An error occurred while updating the like count
        alert('An error occurred while updating the like count.');
      }
    };
    xhr.open('POST', 'count.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('postId=' + encodeURIComponent(postId));
  });
});
