<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
                    session_start();
                    $db_host = 'localhost';
                    $db_user = 'root';
                    $db_pass = '';
                    $db_name = 'trial';
                    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                    if (!$conn) {
                        die("Database connection failed: " . mysqli_connect_error());
                    }
                    echo '
                        
                        <form action="sample_buy.php" method="post">
                        <ol>
                        <li><button type="submit" name="add_to_cart[]" value = "8">8</button></li>
                        <li><button type="submit" name="add_to_cart[]" value = "9">9</button></li>
                        <li><button type="submit" name="add_to_cart[]" value = "10">10</button></li>
                        <li><button type="submit" name="add_to_cart[]" value = "11">11</button></li>
                        <li><button type="submit" name="add_to_cart[]" value = "12">12</button></li>
                        </ol>
                        </form>
                        
                    ';
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST['add_to_cart'])) {
                            $selectedItems = $_POST['add_to_cart'];
                            $user_id = $_SESSION['user_id'];
                            // Process the selected items as needed
                            // print_r($selectedItems); // This will output the selected items array
                            $check_query = "SELECT * from sample_cart where artwork_id = $selectedItems[0] and user_id = $user_id";
                        $check_query_result = $conn->query($check_query);
                        if($check_query_result->num_rows === 0){
                            $insert_query = "INSERT INTO sample_cart (artwork_id, user_id) 
                                    VALUES ('$selectedItems[0]', '$user_id')";
                            if($conn->query($insert_query)){
                                header("Location: sample_cart.php");
                            }else{
                                die('Error: ' . mysqli_error());
                            }
                        }
                        
                    }
                }
                    // $select_query = "Select * from `artwork_entries` ORDER BY RAND() ";
                    // $result_query = mysqli_query($conn, $select_query);
                    // while ($row = mysqli_fetch_assoc($result_query)) {
                    //     $description = $row['description'];
                    //     $artwork_image = $row['artwork_image'];
                    //     $artist_name = $row['artist_name'];
                    //     $artwork_title = $row['artwork_title'];
                    //     $artwork_price = $row['artwork_price'];
                    //     $contact_info = $row['contact_info'];
                    //     $artwork_id = $row['id'];
                    //     $artwork = '' . $artwork_image;
                    //     echo "<div class='col-md-3 mb-4'>
                    //     <a href='artwork_details.php?artwork_id=$artwork_id'>
                    //         <div class='card' style='background-color: #fff;'>
                    //             <div class='card-body' style='text-align: center;'>
                    //                 <div class='card-img'>
                    //                     <img src='$artwork' alt='$artwork_title' class='image-style'>
                    //                 </div>
                    //                 <p class='card-text'>$artwork_title</p>
                    //                 <p class='card-text'>$description</p>
                    //                 <p class='card-text'>Price : $artwork_price</p>
                    //                 <p class='card-text'>Artist : $artist_name</p>
                        
                    //                 <form method='post' action='buy.php'>
                    //                     <input type='hidden' name='artwork_id' value='$artwork_id'>
                    //                     <input type='hidden' name='artwork_title' value='$artwork_title'>
                    //                     <input type='hidden' name='artwork_image' value='$artwork_image'>
                    //                     <input type='hidden' name='artwork_description' value='$description'>
                    //                     <input type='hidden' name='artist_name' value='$artist_name'>
                    //                     <input type='hidden' name='artwork_price' value='$artwork_price'>
                    //                     <button type='submit' name='add_to_cart' class='btn btn-info' style='margin-bottom: 10px;'>Add to Cart</button>
                    //                     <button type='submit' name='buy_now' class='btn btn-info' style='margin-bottom: 10px;'>Buy Now</button>
                    //                 </form>
                    //             </div>
                    //         </div>
                    //     </div>";
                    // }
                    // if (isset($_POST['add_to_cart'])) {
                    //     $artwork_id = $_POST['artwork_id'];
                    //     $user_id = $_SESSION['user_id'];
                    //     $artwork_title = $_POST['artwork_title'];
                    //     $artist_name = $_POST['artist_name'];
                    //     $description = $_POST['artwork_description'];
                    //     $artwork_price = $_POST['artwork_price'];
                    //     $check_query = "SELECT * from cart_entries where artwork_id = $artwork_id and user_id = $user_id";
                    //     $check_query_result = $conn->query($check_query);
                    //     if($check_query_result->num_rows === 0){
                    //         $insert_query = "INSERT INTO cart_entries (artwork_id, artwork_title, artist_name, artwork_price,user_id,artwork_description,artwork_image) 
                    //                 VALUES ('$artwork_id', '$artwork_title', '$artist_name', '$artwork_price','$user_id','$description','$artwork_image')";
                    //         if($conn->query($insert_query)){
                    //             header("Location: cart.php");
                    //         }else{
                    //             die('Error: ' . mysqli_error());
                    //         }
                    //     }
                    // }
                    ?>
</body>
</html>