<?php


    class Delete extends CI_Controller
    {


        function index()
        {
            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            header("Location: ".base_url()."home");
        }

        function restaurant($id = 0){

            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            $this->load->model('Restaurantes');
            $this->Restaurantes->deleteRestaurant($id);
            header("Location: ".base_url()."home");

        }

        function food($id = 0){

            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            $this->load->model('Food');
            $this->Food->deleteFood($id);
            header("Location: ".base_url()."home/food");
        }

        function category($id = 0){

            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            $this->load->model('Categorias');
            $this->Categorias->deleteCategory($id);
            header("Location: ".base_url()."home/categories");
        }

        function user($id = 0){

            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            $this->load->model('User');
            $this->User->deleteUser($id);
            header("Location: ".base_url()."home/users");
        }

        function comment($id = 0){

            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            $this->load->model('Comentarios');
            $this->Comentarios->deleteComment($id);
            header("Location: ".base_url()."home/comments");
        }

    }
