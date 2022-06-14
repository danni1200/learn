

<?php
// GET method
$url = "https://reqbin.com/echo/get/json";

$json = file_get_contents($url);

echo $json;
?>


<?php
// CURL-less method for sending POST requests using PHP
$url = "https://reqbin.com/echo/post/form";

$data = array('key1' => 'value1', 'key2' => 'value2');

$options = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded",
    'method'  => 'POST',
    'content' => http_build_query($data)
  )
);
$context  = stream_context_create($options);
$resp = file_get_contents($url, false, $context);
var_dump($resp);
?>