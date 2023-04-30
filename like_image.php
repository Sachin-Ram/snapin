<?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $image_id = $_POST['image_id'];
    $conn = mysqli_connect('mysql.selfmade.ninja:3306', 'sachin', 'sachinram10', 'sachin_photogramdb');
    $sql = "UPDATE images SET like_count = like_count + 1 WHERE id = $image_id";
    mysqli_query($conn, $sql);
    $new_like_count = mysqli_query($conn, "SELECT like_count FROM images WHERE id = $image_id")->fetch_object()->like_count;
    echo $new_like_count;
    exit;
}
