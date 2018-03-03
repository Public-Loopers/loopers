<?php

  namespace loopers\app;

  class index extends controller
  {

    /**
     * @Fungsi __construct controllers index
     */
    public function __construct()
    {
      $this->loadModel('index');
      $this->loadView('index');
    }

    /**
     * @Meload tampilan atau view index sebelum login
     */
    public function index()
    {
      if(!session::exists('email'))
      {
        $this->view->index();
      }else{
        redirect::to(URL);
      }
    }

  }

?>
