<?php

$folder = "uploads/";

if(!file_exists($folder)){
    mkdir($folder,0777,true);
}

if(isset($_FILES['file']) && $_FILES['file']['name']!= "" && $_FILES['file']['error'] == 0)
{
$destination = $folder . $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],$destination);

 $files = glob($folder . "*.{jpg,JPG,png,PNG,jpeg,JPEG}",GLOB_BRACE);   
 
 echo json_encode($files);
}
else{
    $files = glob($folder . "*.{jpg,JPG,png,PNG,jpeg,JPEG}",GLOB_BRACE);   
    echo json_encode($files);
}