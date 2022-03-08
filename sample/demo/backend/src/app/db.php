<?php
//
require_once "vendor/autoload.php";
print("ssssssssssssssssssssssssss");
define("DEFAULT_URL","https://<- project ->.firebaseio.com/");
define("DEFAULT_TOKEN","<- secret ->");

$test = array(
  "name" => "konojunya",
  "age" => 19
);

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL,DEFAULT_TOKEN);

// set
$firebase->set("/users",$test);
print("start firebase");
// get
$user = $firebase->get("/users");

echo $user;
