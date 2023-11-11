<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "trial";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION["user_id"]) && isset($_POST["submit"])) {
    $userid = $_SESSION["user_id"];
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $updateAddressQuery = "UPDATE users_table SET address = '$address' WHERE user_id = $userid";
    mysqli_query($conn, $updateAddressQuery);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $updateUserQuery = "UPDATE users_table SET username = '$username' WHERE user_id = $userid";
    mysqli_query($conn, $updateUserQuery);
    $phno = mysqli_real_escape_string($conn, $_POST["phno"]);
    $updatePhnoQuery = "UPDATE users_table SET phone_number = '$phno' WHERE user_id = $userid";
    mysqli_query($conn, $updatePhnoQuery);
    $email= mysqli_real_escape_string($conn, $_POST["email"]);
    $updateEmailQuery = "UPDATE users_table SET email = '$email' WHERE user_id = $userid";
    mysqli_query($conn, $updateEmailQuery);
if ($_FILES["profile_image"]["error"] == UPLOAD_ERR_OK) {
    $uploadDirectory = "uploads/"; 
    $targetFile = $uploadDirectory . basename($_FILES["profile_image"]["name"]);

    if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
        $updatePictureQuery = "UPDATE users_table SET profile_picture = '$targetFile' WHERE user_id = $userid";
        mysqli_query($conn, $updatePictureQuery);
    }
}
    header("Location: profile1.php"); 
    exit();
}
?>
