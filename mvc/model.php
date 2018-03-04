<?php

  class model
  {

    public function __construct()
    {
      /**
       * @Memulai database conection
       */
      $this->_db=database::getInstance();
    }

  }

?>
