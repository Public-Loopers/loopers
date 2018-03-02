<?php

  /**
   * @use namespace loopers
   */
  use loopers\route;

  /**
   * @PSR-4 autoload
   */
  require_once 'vendor/autoload.php';

  /**
   * @session Start
   */
  session_start();

  /**
   * @var route
   *
   * Metode route yang digunakan adalah metode bolean
   */
  $route=new route();
  $route->init();

?>
