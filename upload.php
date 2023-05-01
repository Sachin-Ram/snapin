<?php
// Connect to the database
$conn = mysqli_connect('mysql.selfmade.ninja:3306', 'sachin', 'sachinram10', 'sachin_photogramdb');

// Get the image data from the form
$image = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];
$image_size = $_FILES['image']['size'];
$image_type = $_FILES['image']['type'];

// Open the image file
$fp = fopen($image, 'rb');

// Read the image data
$image_data = fread($fp, filesize($image));

// Close the image file
fclose($fp);

// Escape the image data for use in a SQL query
$image_data = mysqli_real_escape_string($conn, $image_data);

// Insert the image data into the database
$query = "INSERT INTO images (name, size, type, data) VALUES ('$image_name', '$image_size', '$image_type', '$image_data')";
mysqli_query($conn, $query);


// // Connect to the database
// $conn = mysqli_connect('localhost', 'username', 'password', 'dbname');

// // Retrieve the image data from the database
// $query = "SELECT * FROM images";
// $result = mysqli_query($conn, $query);

// // Loop through the results and display each image
// while ($row = mysqli_fetch_assoc($result)) {
//   echo '<img src="data:' . $row['type'] . ';base64,' . base64_encode($row['data']) . '">';
// }
?>
<link href="/photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<main class="container">
 <div class="bg-light mt-3 rounded p-5">
  <h1>Image uploaded</h1>
  <form action="index.php">
    <button class="btn btn-seconary">click here</button>
  </form>
 </div>
</main>
