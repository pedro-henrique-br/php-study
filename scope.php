<?php

$name = "Jonh Smith";

$user = function () {
  return $GLOBALS["name"];
};

setcookie("token", "301u310haa0h_SO)!", time() + 1800, "/");

if (isset($_COOKIE["token"])) {
  $token = $_COOKIE["token"];
  echo $token;
}

// echo $user();

?>