<?php


    class Restaurantes extends CI_Model
    {

        function getRestaurants(){

            $query = $this->db->query("SELECT * FROM restaurante ORDER BY categoria_rest ASC");
            $i = 1;
            $tabla = '';

            foreach ($query->result() as $row) {


                $tabla .= "<tr>";

                $tabla.= "<th scope='row'>$i</th>";
                $tabla.= "<td>$row->nombre_rest</td>";
                $tabla.= "<td>$row->direccion_rest</td>";
                $tabla.= "<td>$row->telefono_rest</td>";
                $tabla.= "<td>$row->categoria_rest</td>";

                $tabla.= "<td>
                        <div class='row'>
                            <div class='col-md-6'>
                                <a href='".base_url()."edit/restaurant/$row->id_rest' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span></a>
                            </div>
                            <div class='col-md-6'>
                                <a href='".base_url()."delete/restaurant/$row->id_rest' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
                            </div>
                        </div>
                    </td>";

                $tabla.= "</tr>";



                $i++;
            }

            return $tabla;

        }

        function getListCategories($selected = ''){

            $this->db->reset_query();

            $query = $this->db->query('SELECT nombre_cat FROM categorias');
            $tabla = '';

            foreach ($query->result() as $row) {


                if($selected == $row->nombre_cat){
                    $tabla .= "<option value='$row->nombre_cat' selected>$row->nombre_cat</option>";
                }else{
                    $tabla .= "<option value='$row->nombre_cat'>$row->nombre_cat</option>";
                }

            }

            return $tabla;


        }

        function deleteRestaurant($id){
            $this->db->where('id_rest', $id);
            $this->db->delete('restaurante');
        }

        function createRestaurant($data){
            $this->db->insert('restaurante', $data);
        }

        function getRestaurant($id){
            return $this->db->get_where('restaurante', 'id_rest='.$id, "1");
        }

        function updateRestaurant($data, $id){

            $sql = $this->db->update_string('restaurante', $data, "id_rest=".$id);

            $this->db->query($sql);
        }

    }
