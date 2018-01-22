<?php

    class Api_Model extends CI_Model{

        function obtener_comentarios($id_restaurante){
            $query = $this->db->get_where('comentarios', 'id_rest='.$id_restaurante);
            return $query->result_array();
        }

        function buscar_por_comida($busqueda){

            $this->db->like('nombre_comida', $busqueda);
            $this->db->or_like('descripcion_comida', $busqueda);
            $this->db->or_like('categoria_comida', $busqueda);
            $this->db->or_like('restaurante_comida', $busqueda);

            $query = $this->db->get('comida');
            return $query->result_array();
        }

        function buscar_por_restaurante($busqueda){

            $this->db->reset_query();
            $this->db->like('nombre_rest', $busqueda);
            $query = $this->db->get('restaurante');
            return $query->result_array();

        }

        function buscar_por_categoria($busqueda){

            $this->db->reset_query();
            $this->db->like('nombre_cat', $busqueda);
            $this->db->or_like('descripcion_cat', $busqueda);
            $query = $this->db->get('categorias');
            return $query->result_array();

        }


    }
