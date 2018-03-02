<?php

  namespace loopers;

  class model
  {

    public function __construct()
    {
      use loopers\database\database;
      $this->_db=database::getInstance();
    }

  }

?>
