<?php
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])){

    $check=getimagesize($_FILES["fileToUpload"]["tmp_nmae"]);
    
    if($check!==false){
        echo "File is an image -".$check["mime"].".";
        $uploadOk=1;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
    }
    if($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    else {
        echo"File is not an image.";
        $uploadOk=0;
    }
}

?>