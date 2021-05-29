<?php
//Created by Kevin Agustin Bongcawel

//define the requirements
define('END_POINT', 'http://172.16.109.156');
define('TOKEN', 'f28d5f3109b0d6e2e8d8b8d11b08769571adea90');

//Types

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

//TAT
//$getTAT = "select avg(extract(epoch from closed_on - created_on)) as avg_days from issues where tracker_id = '29' and status_id = '14' and project_id = '499'";
//$getTATq = pg_exec($db_handle, $getTAT);
//$getTATres = pg_fetch_assoc($getTATq);
//$finalTAT = round($getTATres['avg_days']/86400,0);

function countTicketDuration(){

}

?>
