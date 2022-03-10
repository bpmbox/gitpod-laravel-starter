<?php
print("start firabase");
require_once "vendor/autoload.php";

define("DEFAULT_URL","https://<- project ->.firebaseio.com/");
define("DEFAULT_TOKEN","<- secret ->");

$test = array(
    "name" => "konojunya",
    "age" => 19
);
$test1 = array(
    "name" => "hoge子",
    "age" => 19
);

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$firebase->set("/users/konojunya",$test);
$firebase->set("/users/hogeko",$test1);
$user = $firebase->get("/users");
echo $user;
