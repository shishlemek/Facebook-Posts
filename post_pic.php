<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <p><a style="color: blue">Here you can post a picture</a></p>

  <link rel="stylesheet"
  type="text/css"
  href="style.css" />
</head>

<body>
  <div id="content">

    <form method="POST"
    action=""
    enctype="multipart/form-data">
    <input type="file"
    name="uploadfile"
    value="" />

    <div>
      <button type="submit"
      name="upload">
      UPLOAD
    </button>
  </div>
  <?php
error_reporting(0);
?>
<?php
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "Pictures/".$filename;

    $db = mysqli_connect("localhost", "root", "", "facebook-posts");

        // Get all the submitted data from the form
        $sql = "INSERT INTO `photo_posts` (`photos`) VALUES ('$filename')";

        // Execute query
        mysqli_query($db, $sql);

        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($db, "SELECT * FROM `photo_posts`");
?>
</form>
</div>
</body>
</html>
