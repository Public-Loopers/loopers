<?php

  class index_view extends view
  {

    public function __construct()
    {
      $this->view=new view();
    }

    public function index()
    {

      /**
       * @TITLE for page
       */
      $this->view->title=TITLE;

      /**
       * @Head file
       */
      $this->view->js=array('templates/core/src/js/index.js');
      $this->view->css=array('templates/core/src/css/index.css');

      /**
       * @frame
       */
      $this->view->frame('index/index');
    }

  }

?>
