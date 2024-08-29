<?php
    require_once('../functions.php');
    $ip = "10.0.0.226";
    $token = "XXXXXXXXXX";
    $result = micra_max_get_display($ip,$token);
    echo $result["bigDisplayValue"];
?>