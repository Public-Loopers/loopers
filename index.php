<?php

  /**
   * @Spl_autoload_register
   */
  require_once 'config/autoload.php';

  /**
   * @START SESSION
   */
  session_start();

  /**
   * @Memulai routing controllers
   */
  $route=new route();
  $route->init(); //Memanggil init load Controller dan Methode

?>
