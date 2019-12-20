<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'GET'){ 
if (isset($_SESSION['horoskop']))
{
    echo $_SESSION['horoskop'];
    exit();
}
}

?>