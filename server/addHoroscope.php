<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $month = substr($_POST['personnummer'],2,2);
    $day = substr($_POST['personnummer'],4,2);


    include "./calculateHoroscope.php";
    
    if(!isset($_SESSION['horoskop'])) {
        
        $horoskop = getHoroscope($month, $day);
        $_SESSION['horoskop'] = $horoskop;
        echo true;
    } else {
        echo false;
    }
} else {
    echo false;
}
?>