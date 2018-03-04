<?php

  class index extends controller
  {

    public function __construct()
    {
      $this->loadView('index');
    }

    public function index()
    {
      if(!session::exists(SESBASE))
      {
        $this->view->index();
      }else{
        redirect::to(URL);
      }
    }

  }

?>
