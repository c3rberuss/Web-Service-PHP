<?php


    class Food extends CI_Model
    {


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

        function getListRestaurants($selected = ''){

            $this->db->reset_query();

            $query = $this->db->query('SELECT nombre_rest FROM restaurante');

            $tabla = '';

            foreach ($query->result() as $row) {

                if($selected == $row->nombre_rest){
                    $tabla .= "<option value='$row->nombre_rest' selected>$row->nombre_rest</option>";
                }else{
                    $tabla .= "<option value='$row->nombre_rest'>$row->nombre_rest</option>";
                }

            }

            return $tabla;


        }

        function getFoods(){
            $this->db->order_by('id_comida', 'DESC');
            $query = $this->db->get('comida');
            $i = 1;
            $tabla = '';

            foreach ($query->result() as $row) {


                $tabla .= "<tr>";

                $tabla.= "<th scope='row'>$i</th>";
                $tabla.= "<td>$row->nombre_comida</td>";
                $tabla.= "<td>$row->precio_comida</td>";
                $tabla.= "<td>$row->restaurante_comida</td>";
                $tabla.= "<td>$row->categoria_comida</td>";

                $tabla.= "<td>
                        <div class='row'>
                            <div class='col-md-6'>
                                <a href='".base_url()."edit/food/$row->id_comida' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span></a>
                            </div>
                            <div class='col-md-6'>
                                <a href='".base_url()."delete/food/$row->id_comida' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
                            </div>
                        </div>
                    </td>";

                $tabla.= "</tr>";



                $i++;
            }

            return $tabla;
        }

        function createFood($data)
        {
            $this->db->insert('comida', $data);
        }

        function updateFood($data, $id){
            $sql = $this->db->update_string('comida', $data, "id_comida=".$id);

            $this->db->query($sql);
        }

        function getFood($id){
            return $this->db->get_where('comida', 'id_comida='.$id, "1");
        }

        function deleteFood($id){
            $this->db->where('id_comida', $id);
            $this->db->delete('comida');
        }

    }
