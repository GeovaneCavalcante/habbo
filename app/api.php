<?php

require_once __DIR__ . '/../vendor/autoload.php';


$md5 = $_GET['dados'];

$response = Unirest\Request::get("https://privatix-temp-mail-v1.p.mashape.com/request/mail/id/$md5/",
  array(
    "X-Mashape-Key" => "N6V1Sh8BYSmshSRoMaKIlv0OyGCap1eLxTKjsnO3Ozg8ouiCiy",
    "Accept" => "application/json"
  )
);

$value = $response->body[0];

$link = $value->mail_text;
$numero = explode('(', $link);
$string = $numero[1];
$corta2 = explode(')', $string);
echo $corta2[0];
