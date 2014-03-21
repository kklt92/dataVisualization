<?php

$file = fopen("data/tran_sf_railac_1_Data.csv", "r");

$column_headers = fgetcsv($file);
foreach($column_headers as $headers) {
	$result[$header] = array();
}
$combined[] = $column_headers;
while(($data = fgetcsv($file)) != FALSE) {
	$i = 0;
//	$combined[] = array_combine($column_headers, $data);
	$combined[] = $data;
}
fclose($file);
$json1 = json_encode($combined);
echo $json1;

//class parseJson($inputJson) {

?>
