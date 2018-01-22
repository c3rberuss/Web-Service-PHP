<?php

class Prueba extends CI_Controller{

  public function index(){

      $data = array('titulo' => 'Pruebas :3', 'usuario' => 'Jousee');

      $this->load->view('pruebas', $data);

  }

}
