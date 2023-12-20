<?php
  $url = 'https://livewwdazn.akamaized.net/dashdrm/dazn-linear-054/stream.mpd';
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  header('Content-Type: application/xml');
  echo $response;
?>
