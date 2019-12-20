
<?php
session_start();
parse_str(file_get_contents("php://input"), $_PUT);


if ($_SERVER['REQUEST_METHOD'] == 'PUT'){ 
$month = substr($_PUT['personnummer'], 2, 2);
$day = substr($_PUT['personnummer'], 4, 2);

  
include "./calculateHoroscope.php";
 
  
    if(isset($_SESSION['horoskop'])){  
    $_SESSION['horoskop'] =  $horoskop;
    echo true;
}
else{
    echo false;
}
}



?>