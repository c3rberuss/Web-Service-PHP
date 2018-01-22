<?php

class Home extends CI_Controller {

	public function index()
	{

		$logged_in = $this->session->userdata('logged_in');

		if(!isset($logged_in) OR $logged_in == FALSE){
			header('Location: '.base_url());
		}

			$this->load->model('Restaurantes');

			$data = array(
				'titulo' => 'Dashboard - RestaurantesAdmin'
			);

			$this->load->view('guest/header', $data);

			$data = array(
				'username' => 'C3RBERUSS!',
				'active_page' => 'Dashboard'
			);

			$this->load->view('guest/nav', $data);

			$data = array(
				'lista_restaurantes' => $this->Restaurantes->getRestaurants()
			);

			$this->load->view('listar_restaurantes', $data);

			$this->load->view('guest/footer');

	}

	public function food(){

		$logged_in = $this->session->userdata('logged_in');

		if(!isset($logged_in) OR $logged_in == FALSE){
			header('Location: '.base_url());
		}

		$this->load->model('Food');

		$data = array(
			'titulo' => 'Platillos - RestaurantesAdmin'
		);

		$this->load->view('guest/header', $data);

		$data = array(
			'username' => 'C3RBERUSS!',
			'active_page' => 'Platillos'
		);

		$this->load->view('guest/nav', $data);

		$data = array(
			'lista_platillos' => $this->Food->getFoods()
		);

		$this->load->view('list_food', $data);

		$this->load->view('guest/footer');


	}


	public function categories(){

		$logged_in = $this->session->userdata('logged_in');

		if(!isset($logged_in) OR $logged_in == FALSE){
			header('Location: '.base_url());
		}

		$this->load->model('Categorias');

		$data = array(
			'titulo' => 'Categorías - RestaurantesAdmin'
		);

		$this->load->view('guest/header', $data);

		$data = array(
			'username' => 'C3RBERUSS!',
			'active_page' => 'Categorías'
		);

		$this->load->view('guest/nav', $data);

		$data = array(
			'lista_categorias' => $this->Categorias->getCategories()
		);

		$this->load->view('listar_categorias', $data);

		$this->load->view('guest/footer');

	}

	public function users(){

		$logged_in = $this->session->userdata('logged_in');

		if(!isset($logged_in) OR $logged_in == FALSE){
			header('Location: '.base_url());
		}

		$this->load->model('User');

		$data = array(
			'titulo' => 'Usuarios - RestaurantesAdmin'
		);

		$this->load->view('guest/header', $data);

		$data = array(
			'username' => 'C3RBERUSS!',
			'active_page' => 'Usuarios'
		);

		$this->load->view('guest/nav', $data);

		$data = array(
			'lista_usuarios' => $this->User->getUsers()
		);

		$this->load->view('listar_usuarios', $data);

		$this->load->view('guest/footer');

	}

	public function comments(){

		$logged_in = $this->session->userdata('logged_in');

		if(!isset($logged_in) OR $logged_in == FALSE){
			header('Location: '.base_url());
		}

		$this->load->model('Comentarios');

		$data = array(
			'titulo' => 'Comentarios - RestaurantesAdmin'
		);

		$this->load->view('guest/header', $data);

		$data = array(
			'username' => 'C3RBERUSS!',
			'active_page' => 'Comentarios'
		);

		$this->load->view('guest/nav', $data);

		$data = array(
			'lista_comentarios' => $this->Comentarios->getComments()
		);

		$this->load->view('listar_comentarios', $data);

		$this->load->view('guest/footer');
	}

}
