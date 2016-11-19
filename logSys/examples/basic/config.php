<?php
/**
 * For Development Purposes
 */
ini_set("display_errors", "on");

require __DIR__ . "/LS.php";
\Fr\LS::config(array(
  "basic" => array(
    "output_callback" => function($state, $extraInfo){
      
    }
  ),

  "db" => array(
    "host" => "localhost",
    "port" => 3306,
    "username" => "root",
    "password" => "password",
    "name" => "test",
    "table" => "users"
  ),
  "features" => array(
    "auto_init" => true
  ),
  "pages" => array(
    "no_login" => array(
      "/vineeta/logSys/",
      "/vineeta/logSys/examples/basic/reset.php",
      "/vineeta/logSys/examples/basic/register.php"
    ),
    "everyone" => array(
      "/vineeta/logSys/examples/two-step-login/status.php"
    ),
    "login_page" => "/vineeta/logSys/examples/basic/login.php",
    "home_page" => "/vineeta/logSys/examples/basic/home.php"
  )
));
