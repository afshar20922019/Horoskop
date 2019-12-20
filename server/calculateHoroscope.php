<?php
    

 function getHoroscope($month, $day) {
    $horoscopes = array(
        "Väduren" => "03:20:04:19",
        "Oxen" => "03:20:04:19",
        "Tvillingarna" => "05:21:06:20",
        "Kräftan" => "03:20:04:19",
        "Lejonet" => "07:22:08:22",
        "Jungfrun" => "08:23:09:22",
        "Vågen" => "09:23:10:22",
        "Skorpionen" => "10:23:11:21",
        "Skytten" => "11:22:12:21",
        "Stenbocken" => "12:22:01:20",
        "Vattumannen" => "01:21:02:18",
        "Fiskarna" => "02:19:03:19",
    );
    foreach ($horoscopes as $key => $value) {
        $dates= explode(":", $value);
        $fromMonth = $dates[0];
        $fromDate = $dates[1];
        $toMonth = $dates[2];
        $toDate = $dates[3];
 
        if ($month === $fromMonth && $day >= $fromDate || $month === $toMonth && $day <= $toDate) {
            return   "<h1>Du är en $key!</h1>";
        }
    }

 } 
?>
