<?php

  /**
   *  Spl_Autoload_Register
   *  Load semua class yang ingin kamu gunakan di sini;
   */
  spl_autoload_register(function($class)
  {

    /**
     * Ini adalah sources tempat file class berada
     */
    $sources=array(
                   "route/$class.php",
                   "database/$class.php",
                   "mvc/$class.php",
                   "loopers/session/$class.php",
                   "loopers/time/$class.php",
                   "loopers/token/$class.php",
                   "loopers/redirect/$class.php",
                   "loopers/validation/$class.php",
                   "loopers/dibug/$class.php",
                   "loopers/input/$class.php"
                  );

    /**
     * Memanggil semua file class
     */
    foreach($sources as $source)
    {
      if(file_exists($source))
      {
       require_once $source;
      }
    }

  });

?>
