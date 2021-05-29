<?php
//Created by Kevin Agustin Bongcawel

//define the requirements
define('END_POINT', 'xxxxxxxxxxxxxxxxxxxxxxxx');
define('TOKEN', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

//define the json ready url
$nurl = sprintf('%s/issues.json?key=%s&project_id=499&status_id=1', END_POINT, TOKEN);
$ourl = sprintf('%s/issues.json?key=%s&project_id=499&status_id=*', END_POINT, TOKEN);
$onedayurl = sprintf('%s/issues.json?key=%s&query_id=54&project_id=499', END_POINT, TOKEN);

//function to count the json result
function countData($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$result=curl_exec($ch);
curl_close($ch);
$jsoninphp = json_decode($result, true);
$output =  count($jsoninphp['issues']);

return $output;
}
?>
