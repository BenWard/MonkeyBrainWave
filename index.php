<?php
require('monkeybrainwave.php');

$return_status = 200;
$return_message = 'OK';

$neighborhood = filter_input(INPUT_GET, 'neighborhood', FILTER_SANITIZE_STRING);

if (!$neighborhood) {
  $return_status = 404;
  $return_message = 'No neighborhood specified';
} else {
  try {
    $mbw = new MonkeyBrainWave();
    $mbw->check_neighborhood($neighborhood);
  } catch (Exception $e) {
    $return_status = 503;
    $return_message = $e->getMessage();
  }
}

http_response_code($return_status);
header('Content-Type: text/plain; charset=UTF-8');
echo $return_message;
