<?php
include 'library/load.php';
$conn=database::connection();

// Retrieve the post_id data from the AJAX request
$post_id = $_POST['postId'];

// Update the like count for the post with the specified post_id in the database
// ... (code to update the like count in the database)
$sql="UPDATE `Like count` SET
`Like_count` = like_count+1
WHERE `Post_id` = $post_id ";

// Return a response to the client
if ($conn->query($sql) === TRUE) {
    echo "Like count updated successfully";
  }
  $s="SELECT `Like_count` FROM `Like count` where `Post_id` = $post_id ";
  $res=$conn->query($s);
  $arr=$res->fetch_assoc();
  if($arr["Like_count"]){
    $response=$arr["Like_count"];
echo json_encode($response);
  } 


?>
