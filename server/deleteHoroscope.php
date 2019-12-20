
<?php
   session_start();
   
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
   
       if(isset($_SESSION['horoskop'])){ 
        unset($_SESSION['horoskop']);
        echo true;
    }
    else{
        echo false;
    }
   }
   ?>   