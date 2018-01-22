<?php


    class Edit extends CI_Controller
    {

        function index()
        {
            header('Location: '.base_url().'home');
        }

        function restaurant($id = 0){

            $this->load->model("Restaurantes");

            $row = $this->Restaurantes->getRestaurant($id)->row();

            $data = array(
                'titulo' => 'Editar Restaurante - RestaurantesAdmin'
            );

            $this->load->view('guest/header', $data);

            $data = array(
                'username' => 'C3RBERUSS!',
                'active_page' => 'Editar Restaurante'
            );

            $this->load->view('guest/nav', $data);

            $data = array(
                'restaurante' => $row->nombre_rest,
                'telefono' => $row->telefono_rest,
                'direccion' => $row->direccion_rest,
                'action' => 'edit/savechanges/restaurant',
                'id' => $row->id_rest,
                'textButton' => 'Guardar Cambios',
                'categorias' => $this->Restaurantes->getListCategories($row->categoria_rest)
            );

            $this->load->view('agregar_restaurante', $data);

            $this->load->view('guest/footer');

        }

        function food($id = 0){

            $this->load->model("Food");

            $row = $this->Food->getFood($id)->row();

            $data = array(
                'titulo' => 'Editar Platillo - RestaurantesAdmin'
            );

            $this->load->view('guest/header', $data);

            $data = array(
                'username' => 'C3RBERUSS!',
                'active_page' => 'Editar Platillo'
            );

            $this->load->view('guest/nav', $data);

            $data = array(
                'platillo' => $row->nombre_comida,
                'categorias' => $this->Food->getListCategories($row->categoria_comida),
                'descripcion' => $row->descripcion_comida,
                'action' => 'edit/savechanges/food',
                'id' => $row->id_comida,
                'precio' => $row->precio_comida,
                'restaurantes' => $this->Food->getListRestaurants($row->restaurante_comida),
                'textButton' => 'Guardar Cambios'
            );

            $this->load->view('platillos', $data);

            $this->load->view('guest/footer');

        }

        function category($id = 0){

            $this->load->model("Categorias");

            $row = $this->Categorias->getCategory($id)->row();

            $data = array(
                'titulo' => 'Editar Categoría - RestaurantesAdmin'
            );

            $this->load->view('guest/header', $data);

            $data = array(
                'username' => 'C3RBERUSS!',
                'active_page' => 'Editar Categoría'
            );

            $this->load->view('guest/nav', $data);

            $data = array(
                'categoria' => $row->nombre_cat,
                'descripcion' => $row->descripcion_cat,
                'action' => 'edit/savechanges/category',
                'id' => $row->id_cat,
                'textButton' => 'Guardar Cambios'
            );

            $this->load->view('categoria', $data);

            $this->load->view('guest/footer');

        }

        function user($id = 0){

            $this->load->model("User");

            $row = $this->User->getUser($id)->row();

            $data = array(
                'titulo' => 'Editar Usuario - RestaurantesAdmin'
            );

            $this->load->view('guest/header', $data);

            $data = array(
                'username' => 'C3RBERUSS!',
                'active_page' => 'Editar usuario'
            );

            $this->load->view('guest/nav', $data);

            $data = array(
                'user' => $row->name_usr,
                'pass' => $row->pass_usr,
                'action' => 'edit/savechanges/user',
                'id' => $id,
                'textButton' => 'Guardar Cambios'
            );

            $this->load->view('usuario', $data);

            $this->load->view('guest/footer');

        }

        function saveChanges($of = 'none'){

            switch ($of) {
                case 'restaurant':

                    $this->load->model("Restaurantes");

                    $id = $this->input->post('id');

                    $data = array(
                        'nombre_rest' => $this->input->post('restaurante'),
                        'direccion_rest' => $this->input->post('direccion'),
                        'telefono_rest' => $this->input->post('telefono'),
                        'categoria_rest' => $this->input->post('categoria')
                    );

                    $this->Restaurantes->updateRestaurant($data, $id);

                    header('Location: '.base_url().'home');

                    break;

                case 'category':

                    $this->load->model('Categorias');

                    $id = $this->input->post('id');

                    $data = array(
                        'nombre_cat' => $this->input->post('categoria'),
                        'descripcion_cat' => $this->input->post('categoria')
                    );

                    $this->Categorias->updateCategory($data, $id);

                    header('Location: '.base_url().'home/categories');

                    break;

                case 'food':

                    $this->load->model('Food');

                    $id = $this->input->post('id');

                    $data = array(
                        'nombre_comida' => $this->input->post('platillo'),
                        'descripcion_comida' => $this->input->post('descripcion'),
                        'categoria_comida' => $this->input->post('categoria'),
                        'restaurante_comida' => $this->input->post('restaurante'),
                        'precio_comida' =>  $this->input->post('precio')
                    );

                    $this->Food->updateFood($data, $id);

                    header('Location: '.base_url().'home/food');

                    break;

                case 'user':

                    $this->load->model('User');

                    $id = $this->input->post('id');

                    $data = array(
                        'name_usr' => $this->input->post('user'),
                        'pass_usr' => $this->input->post('pass')
                    );

                    $this->User->updateUser($data, $id);

                    header('Location: '.base_url().'home/users');

                    break;


                default:
                    header('Location: '.base_url().'home');
                    break;
            }

        }

    }
