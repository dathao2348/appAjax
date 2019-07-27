<?php
$json1='["Ha Noi","Ho Chi Minh","Da Nang"]';
$json2='{"name":"Nguyen Van An","age":21,"location":"Ha Noi"}';

$convert1=json_decode($json1);
$convert2=json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";

echo "<pre>";
print_r($convert2);
echo "</pre>";