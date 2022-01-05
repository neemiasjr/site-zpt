<?php

Class Template extends Smart{
  function __construct(){
    parent::__construct();

    $this->setTemplateDir('view/');
    $this->setCompileDir('view/compile');
    $this->setCacheDir('view/cache');
  }
} 