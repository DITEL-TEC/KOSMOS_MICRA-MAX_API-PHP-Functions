<?php
//*********************************************************
//Incluimos la libreria donde teneis las funciones definidas
//*********************************************************
require_once('../functions.php');

//*********************************************************
//Definimos la IP en la que se encuetra nuestro Micra-M Max
//*********************************************************
$ip = "10.0.0.226";
$token = "XXXXXXXXXXXX";

//*************************
//EJEMPLO DE UN GET CONFIG
//$result es un array que podeis consultar un valor especifico o cualquier valor de la estructura
//En este ejemplo queremos ver solo una respuesta de la IP donde esta instalado el equipo
//*************************
$result = micra_max_get_config($ip,$token);
echo "La IP del equipo es: " . $result["ipAddress"];
echo "\n";

//*************************
//EJEMPLO DE UN GET DISPLAY
//$result es un array que podeis consultar un valor especifico o cualquier valor de la estructura
//En este ejemplo queremos ver solo el valor del display grande
//*************************
$result = micra_max_get_display($ip,$token);
echo "Valor del display actual: " . $result["bigDisplayValue"];
echo "\n";

//*************************
//EJEMPLO DE UN GET INFO
//$result es un array que podeis consultar un valor especifico o cualquier valor de la estructura
//*************************
//$result = micra_max_get_info($ip);
// echo "Valor del parametro info es: " . $result["bigDisplayValue"];
// echo "\n";

//*************************
//EJEMPLO PARA HACER RESET DE LA TARA
//$result es un array que podeis consultar un valor especifico o cualquier valor de la estructura
//*************************
// $result = micra_max_reset_tare($ip);
// var_dump($result);
// $result = micra_max_reset_max($ip);
// var_dump($result);
// $result = micra_max_reset_min($ip);
// var_dump($result);
// $result = micra_max_tare($ip);
// var_dump($result);
//$result = micra_max_factory_reset($ip);
//var_dump($result);


$config = '{"inputType":{"processInputType":{"processInputTypeValues":"10V"},"loadCellInputType":null,"thermometerInputType":null},"display":{"optionsOfDisplayConfig":{"decimalsDisplay":2,"linearisationPoints":2,"roundingFilter":"01","balancedFilter":1},"values":[{"inputValue":null,"displayValue":null},{"inputValue":null,"displayValue":null}],"displayInputError":"off","displayEco":{"ecoState":"off","ecoValue":null},"brightType":"high","tareValue":1,"runModeColor":"green","progModeColor":"orange"},"setPoints":[{"onOffType":"off","value":0.0,"comparisonValue":"net","actionMode":"high","noNcType":"no","colorAlarmType":"noChange","activationType":"delay","activationValue":0.0},{"onOffType":"off","value":0.0,"comparisonValue":"net","actionMode":"high","noNcType":"no","colorAlarmType":"noChange","activationType":"delay","activationValue":0.0},{"onOffType":"off","value":0.0,"comparisonValue":"net","actionMode":"high","noNcType":"no","colorAlarmType":"noChange","activationType":"delay","activationValue":0.0},{"onOffType":"off","value":0.0,"comparisonValue":"net","actionMode":"high","noNcType":"no","colorAlarmType":"noChange","activationType":"delay","activationValue":0.0}],"rssConfig":{"bauds":9600,"id":1,"protocol":"ascii","replyDelay":"no_delay"},"ipAddress":null,"analogueConfig":{"displayHigh":0.0,"displayLow":0.0,"overrange":"high"},"logicFunctionConfig":{"pin2":1.0,"pin3":2.0,"pin4":6.0},"programmingLockCodeConfig":{"code":0,"lkSetPoints1":false,"lkSetPoints2":false,"lkSetPoints3":false,"lkSetPoints4":false,"input":false,"display":false,"analogueOutput":false,"rsOutput":false,"logicFunctions":false,"tareKey":false,"directSetpoints":false,"brightnessColor":false,"filterP":false,"maxMin":false}}';
$array = json_decode($config);
micra_max_post_config($ip,$token,$array);


?>