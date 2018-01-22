<?php


    class Access extends CI_Controller{

        function index(){
            $usuario = $this->input->post('usuario');
            $pass = $this->input->post('password');

            $result = $this->User->login($usuario, $pass);

            if($result > 0){

                $sesion = array(
                                'username' => $usuario,
                                'logged_in' => TRUE
                            );

                $this->session->set_userdata($sesion);

                header('Location: '.base_url().'home');

            }else{
              echo "<script>alert('Datos Incorrectos');</script>";
              echo "<script>location.href ='".base_url()."';</script>";
            }

        }

        function logout(){
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('username');

            header('Location: '.base_url());

        }

    }
