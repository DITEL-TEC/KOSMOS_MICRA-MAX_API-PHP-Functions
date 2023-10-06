<?php
    require_once('../functions.php');
    $ip = "10.0.0.226";
    $result = micra_max_get_display($ip);
    echo $result["bigDisplayValue"];
?>