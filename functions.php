<?php
//API PHP Functions Ver 1.0 (06/10/2023)
//Diseños y tecnología S.A. (DITEL)
//https://www.ditel.es

//API_PASSWORD ES NECESARIO.
define("DT_PANEL_TOKEN", "Ditel-AbcD");

function micra_max_hello($ip){
    $headers = array();
    $headers[] = "X-DTpanel: ". DT_PANEL_TOKEN;
    $headers[] = 'Content-type: application/json';
    $state_ch = curl_init();
    
    curl_setopt($state_ch, CURLOPT_URL,$ip."/v1/hello.json");
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($state_ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec ($state_ch);
    $result = json_decode($response, true);
    return $result;
}

function micra_max_get_config($ip){
    $headers = array();
    $headers[] = "X-DTpanel: ". DT_PANEL_TOKEN;
    $headers[] = 'Content-type: application/json';
    $state_ch = curl_init();
    
    curl_setopt($state_ch, CURLOPT_URL,$ip."/v1/config");
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($state_ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec ($state_ch);
    $result = json_decode($response, true);
    return $result;
}

function micra_max_get_display($ip){
    $headers = array();
    $headers[] = "X-DTpanel: ". DT_PANEL_TOKEN;
    $headers[] = 'Content-type: application/json';
    $state_ch = curl_init();
    
    curl_setopt($state_ch, CURLOPT_URL,$ip."/v1/get_display");
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($state_ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec ($state_ch);
    $result = json_decode($response, true);
    return $result;
}

function micra_max_get_info($ip){
    $headers = array();
    $headers[] = "X-DTpanel: ". DT_PANEL_TOKEN;
    $headers[] = 'Content-type: application/json';
    $state_ch = curl_init();
    
    curl_setopt($state_ch, CURLOPT_URL,$ip."/v1/get_info");
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($state_ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec ($state_ch);
    $result = json_decode($response, true);
    return $result;
}

function micra_max_reset_tare($ip){
    $headers = array();
    $headers[] = "X-DTpanel: ". DT_PANEL_TOKEN;
    $headers[] = 'Content-type: application/json';
    $state_ch = curl_init();
    
    curl_setopt($state_ch, CURLOPT_URL,$ip."/v1/reset_tare");
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($state_ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec ($state_ch);
    $result = json_decode($response, true);
    return $result;
}

function micra_max_reset_max($ip){
    $headers = array();
    $headers[] = "X-DTpanel: ". DT_PANEL_TOKEN;
    $headers[] = 'Content-type: application/json';
    $state_ch = curl_init();
    
    curl_setopt($state_ch, CURLOPT_URL,$ip."/v1/reset_max");
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($state_ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec ($state_ch);
    $result = json_decode($response, true);
    return $result;
}
function micra_max_reset_min($ip){
    $headers = array();
    $headers[] = "X-DTpanel: ". DT_PANEL_TOKEN;
    $headers[] = 'Content-type: application/json';
    $state_ch = curl_init();
    
    curl_setopt($state_ch, CURLOPT_URL,$ip."/v1/reset_min");
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($state_ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec ($state_ch);
    $result = json_decode($response, true);
    return $result;
}
function micra_max_tare($ip){
    $headers = array();
    $headers[] = "X-DTpanel: ". DT_PANEL_TOKEN;
    $headers[] = 'Content-type: application/json';
    $state_ch = curl_init();
    
    curl_setopt($state_ch, CURLOPT_URL,$ip."/v1/tare");
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($state_ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec ($state_ch);
    $result = json_decode($response, true);
    return $result;
}
function micra_max_factory_reset($ip){
    $headers = array();
    $headers[] = "X-DTpanel: ". DT_PANEL_TOKEN;
    $headers[] = 'Content-type: application/json';
    $state_ch = curl_init();
    
    curl_setopt($state_ch, CURLOPT_URL,$ip."/v1/fatory_reset");
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($state_ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec ($state_ch);
    $result = json_decode($response, true);
    return $result;
}

function micra_max_post_config($ip,$array){

    $api_data_json = json_encode($array);
    $headers = array();
    $headers[] = "X-DTpanel: ". DT_PANEL_TOKEN;
    $headers[] = 'Content-type: application/json';
    $state_ch = curl_init();
        
    curl_setopt($state_ch, CURLOPT_URL,$ip."/v1/config");
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($state_ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($state_ch, CURLOPT_POSTFIELDS, $api_data_json);

    $response = curl_exec ($state_ch);
    $result = json_decode($response, true);

}



?>