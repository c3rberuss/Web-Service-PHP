<?php


    class Categorias extends CI_Model
    {


        function getCategories()
        {
            $this->db->order_by('id_cat', 'DESC');
            $query = $this->db->get('categorias');
            $i = 1;
            $tabla = '';

            foreach ($query->result() as $row) {


                $tabla .= "<tr>";

                $tabla.= "<th scope='row'>$i</th>";
                $tabla.= "<td>$row->nombre_cat</td>";
                $tabla.= "<td>$row->descripcion_cat</td>";

                $tabla.= "<td>
                        <div class='row'>
                            <div class='col-md-6'>
                                <a href='".base_url()."edit/category/$row->id_cat' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span></a>
                            </div>
                            <div class='col-md-6'>
                                <a href='".base_url()."delete/category/$row->id_cat' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
                            </div>
                        </div>
                    </td>";

                $tabla.= "</tr>";



                $i++;
            }

            return $tabla;
        }

        function createCategory($data)
        {
            $this->db->insert('categorias', $data);
        }

        function updateCategory($data, $id){
            $sql = $this->db->update_string('categorias', $data, "id_cat=".$id);

            $this->db->query($sql);
        }

        function getCategory($id){
            return $this->db->get_where('categorias', 'id_cat='.$id, "1");
        }

        function deleteCategory($id){
            $this->db->where('id_cat', $id);
            $this->db->delete('categorias');
        }

    }
