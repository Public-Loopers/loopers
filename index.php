<?php

  /**
   * @Configurasi Database
   */
  define('SERVER','localhost');
  define('USER','root');
  define('PASS','');
  define('DBNAME','bmtloop_data');

  /**
   * @use namespace loopers
   */
  use loopers\route;
  use loopers\database;
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
  new database();
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
