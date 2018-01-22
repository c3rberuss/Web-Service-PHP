<?php

  class Login extends CI_Controller
  {

    function index()
    {

        $logged_in = $this->session->userdata('logged_in');

        if(!isset($logged_in) OR $logged_in == FALSE){
            $this->load->view('login');
        }else{
            header('Location: '.base_url().'home');
        }

    }


  }
