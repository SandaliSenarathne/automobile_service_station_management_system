<?php
session_start();
$_SESSION["err"] = "";
require_once("../db.php");

$target_dir = "uploads/";
$t=time();

// Create folder if not file_exists
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}


$target_file = $target_dir.$t . basename($_FILES["thumbnail"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["thumbnail"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["thumbnail"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  $_SESSION["err"] = "Your file upload failed";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["thumbnail"]["name"])). " has been uploaded.";
    // add row into mysql db
    $category = $_POST['category'];
    $itemName = $_POST['itemName'];
    $description = $_POST['description'];
    $thumbnail = 'backend/'.$target_dir.$t.basename($_FILES["thumbnail"]["name"]);
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $sql = "INSERT INTO item (id, category_id, name, description, thumbnail, price, stock) VALUES (NULL, '$category', '$itemName', '$description', '$thumbnail', '$price', '$qty');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        $_SESSION["err"] = "New item added successfully";
      } else {
        $_SESSION["err"] = "Error: " . $sql . "<br>" . $conn->error;  
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
      
    $conn->close();

} else {
    
    $_SESSION["err"] = "Sorry, there was an error uploading your thumbnail.";
  }
}

// header("Location: ../addItem.php");
// die();
?>