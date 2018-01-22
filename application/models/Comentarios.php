<?php

    class Comentarios extends CI_Model
    {

        function getComments()
        {
            $query = $this->db->query("SELECT restaurante.nombre_rest, comentarios.user_comment, "
                . "comentarios.comentario, comentarios.id_comment FROM comentarios, restaurante WHERE "
                . "comentarios.id_rest=restaurante.id_rest ORDER BY id_comment DESC;");

            $i = 1;
            $tabla = '';

            foreach ($query->result() as $row) {


                $tabla .= "<tr>";

                $tabla.= "<th scope='row'>$i</th>";
                $tabla.= "<td>$row->nombre_rest</td>";
                $tabla.= "<td>$row->user_comment</td>";
                $tabla.= "<td>$row->comentario</td>";

                $tabla.= "<td>
                        <div class='row'>
                            <div class='col-md-6'>
                                <a href='".base_url()."delete/comment/$row->id_comment' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
                            </div>
                        </div>
                    </td>";

                $tabla.= "</tr>";



                $i++;
            }

            return $tabla;
        }

        function deleteComment($id = 0)
        {
            $this->db->where('id_comment', $id);
            $this->db->delete('comentarios');
        }


    }
