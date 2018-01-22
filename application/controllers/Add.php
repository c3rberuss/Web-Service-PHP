<?php


    class Add extends CI_Controller
    {

        function index()
        {
            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            header('Location: '.base_url().'home');
        }

        function restaurant($action = 'add'){

            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            $this->load->model('Restaurantes');

            switch ($action) {
                case 'add':

                    $data = array(
                        'titulo' => 'Agregar Restaurante - RestaurantesAdmin'
                    );

                    $this->load->view('guest/header', $data);

                    $data = array(
                        'username' => 'C3RBERUSS!',
                        'active_page' => 'Agregar Restaurante'
                    );

                    $this->load->view('guest/nav', $data);

                    $data = array(
                        'restaurante' => '',
                        'telefono' => '',
                        'direccion' => '',
                        'action' => 'add/restaurant/new',
                        'id' => '',
                        'textButton' => 'Agregar Restaurante',
                        'categorias' => $this->Restaurantes->getListCategories()
                    );

                    $this->load->view('agregar_restaurante', $data);

                    $this->load->view('guest/footer');

                    break;

                case 'new':

                    $data = array(
                        'nombre_rest' => $this->input->post('restaurante'),
                        'direccion_rest' => $this->input->post('direccion'),
                        'telefono_rest' => $this->input->post('telefono'),
                        'categoria_rest' => $this->input->post('categoria'),
                        'id_rest' =>  null
                    );

                    $this->Restaurantes->createRestaurant($data);

                    header('Location: '.base_url().'add/restaurant');

                    break;

                default:
                    # code...
                    break;
            }

        }


        function food($action = 'add'){

            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            $this->load->model('Food');

            switch ($action) {
                case 'add':

                    $data = array(
                        'titulo' => 'Agregar Platillo - RestaurantesAdmin'
                    );

                    $this->load->view('guest/header', $data);

                    $data = array(
                        'username' => 'C3RBERUSS!',
                        'active_page' => 'Agregar platillo'
                    );

                    $this->load->view('guest/nav', $data);

                    $data = array(
                        'platillo' => '',
                        'categorias' => $this->Food->getListCategories(),
                        'descripcion' => '',
                        'action' => 'add/food/new',
                        'id' => '',
                        'precio' => '',
                        'restaurantes' => $this->Food->getListRestaurants(),
                        'textButton' => 'Agregar Platillo'
                    );

                    $this->load->view('platillos', $data);

                    $this->load->view('guest/footer');

                    break;

                case 'new':

                    $data = array(
                        'id_comida' => null,
                        'nombre_comida' => $this->input->post('platillo'),
                        'descripcion_comida' => $this->input->post('descripcion'),
                        'categoria_comida' => $this->input->post('categoria'),
                        'restaurante_comida' => $this->input->post('restaurante'),
                        'precio_comida' =>  $this->input->post('precio')
                    );

                    $this->Food->createFood($data);

                    header('Location: '.base_url().'add/food');

                    break;

                default:
                    # code...
                    break;
            }

        }

        function category($action = 'add'){

            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            $this->load->model('Categorias');

            switch ($action) {
                case 'add':

                    $data = array(
                        'titulo' => 'Agregar Categoría - RestaurantesAdmin'
                    );

                    $this->load->view('guest/header', $data);

                    $data = array(
                        'username' => 'C3RBERUSS!',
                        'active_page' => 'Agregar categoría'
                    );

                    $this->load->view('guest/nav', $data);

                    $data = array(
                        'categoria' => '',
                        'descripcion' => '',
                        'action' => 'add/category/new',
                        'id' => '',
                        'textButton' => 'Agregar Categoría'
                    );

                    $this->load->view('categoria', $data);

                    $this->load->view('guest/footer');

                    break;

                case 'new':

                    $data = array(
                        'id_cat' => null,
                        'nombre_cat' => $this->input->post('categoria'),
                        'descripcion_cat' => $this->input->post('descripcion')
                    );

                    $this->Categorias->createCategory($data);

                    header('Location: '.base_url().'add/category');

                    break;

                default:
                    # code...
                    break;
            }

        }


        function user($action = 'add'){

            $logged_in = $this->session->userdata('logged_in');

            if(!isset($logged_in) OR $logged_in == FALSE){
                header('Location: '.base_url());
            }

            $this->load->model('User');

            switch ($action) {
                case 'add':

                    $data = array(
                        'titulo' => 'Agregar Usuario - RestaurantesAdmin'
                    );

                    $this->load->view('guest/header', $data);

                    $data = array(
                        'username' => 'C3RBERUSS!',
                        'active_page' => 'Agregar usuario'
                    );

                    $this->load->view('guest/nav', $data);

                    $data = array(
                        'user' => '',
                        'pass' => '',
                        'action' => 'add/user/new',
                        'id' => '',
                        'textButton' => 'Agregar Usuario'
                    );

                    $this->load->view('usuario', $data);

                    $this->load->view('guest/footer');

                    break;

                case 'new':

                    $data = array(
                        'id_usr' => null,
                        'name_usr' => $this->input->post('user'),
                        'pass_usr' => $this->input->post('pass')
                    );

                    $this->User->createUser($data);

                    header('Location: '.base_url().'add/user');

                    break;

                default:
                    # code...
                    break;
            }

        }

    }
