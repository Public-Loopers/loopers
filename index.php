<?php

  /**
   * @config konstanta
   */
  require_once 'config/db_config.php';
  require_once 'config/web_config.php';

  /**
   * @Spl_autoload_register
   */
  require_once 'config/autoload.php';
  require_once 'vendor/autoload.php';

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
