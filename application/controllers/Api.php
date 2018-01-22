<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    require_once(APPPATH.'/libraries/REST_Controller.php');
    //use Restserver\libraries\REST_Controller;

    class Api extends REST_Controller{

        function __construct(){
            parent::__construct();

            $this->load->model('Api_Model');

        }

        function comments_get($id_restaurante = 0){

            $respuesta = array('error' => FALSE,
                               'mensaje' => 'Petición Exitosa',
                               'comentarios' => $this->Api_Model->obtener_comentarios($id_restaurante));

            $this->response($respuesta);

        }

        function buscar_get($busqueda = '__'){

            if($this->get('busqueda') != null){
                $busqueda = $this->get('busqueda');
            }

            $resultados = $this->Api_Model->buscar_por_comida($busqueda);
            $respuesta = '';

            if(!empty($resultados)){

                $resultados2 = $this->Api_Model->buscar_por_restaurante($busqueda);
                $resultados3 = $this->Api_Model->buscar_por_categoria($busqueda);

                $respuesta = array('error' => FALSE,
                                   'mensaje' => 'Petición Exitosa',
                                   'vacio' => FALSE,
                                   'platillos' => $resultados,
                                   'restaurantes' => $resultados2,
                                   'categorias' => $resultados3);

            }else{

                $respuesta = array('error' => FALSE,
                                   'mensaje' => 'Petición Exitosa',
                                   'vacio' => TRUE);

            }

            $this->response($respuesta);
        }

        function obtener_restaurantes_get($id_categoria = 0){
        }

    }
