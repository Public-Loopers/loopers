<?php

  /**
   * @use namespace loopers
   */
  use loopers\route;
  use loopers\dibug;
  use loopers\token;
  use loopers\redirect;

  /**
   * @PSR-4 autoload
   */
  require_once 'vendor/autoload.php';

  /**
   * @session Start
   */
  session_start();

  /**
   * @Statik Fungsion Load
   */
  new dibug();
  new token();
  new redirect();

  /**
   * @var route
   *
   * Metode route yang digunakan adalah metode bolean
   */
  $route=new route();
  $route->init();

?>
