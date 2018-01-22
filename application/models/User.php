<?php

/**
 *
 */
class User extends CI_Model
{

  /*function getUsers()
  {

       $query = $this->db->query('SELECT * FROM estudiante');
       return $query->result_array();
  }

  function getEspecificUsers($carnet = '')
  {

       $query = $this->db->query("SELECT * FROM estudiante WHERE carnet='$carnet'");
       return $query->row();
  }

  function updateUsers($carnet = '', $nombres='')
  {

    $nombres = str_replace('_', ' ', $nombres);

      if( $this->db->query("UPDATE estudiante SET nombres='$nombres' WHERE carnet='$carnet'")){
        return true;
      }else{
        return false;
      }
  }*/

  function getUsers(){

      $this->db->order_by('id_usr', 'DESC');
      $query = $this->db->get('usuarios');

      $i = 1;
      $tabla = '';

      foreach ($query->result() as $row) {


          $tabla .= "<tr>";

          $tabla.= "<th scope='row'>$i</th>";
          $tabla.= "<td>$row->name_usr</td>";
          $tabla.= "<td>$row->pass_usr</td>";

          $tabla.= "<td>
                  <div class='row'>
                      <div class='col-md-6'>
                          <a href='".base_url()."edit/user/$row->id_usr' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span></a>
                      </div>
                      <div class='col-md-6'>
                          <a href='".base_url()."delete/user/$row->id_usr' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
                      </div>
                  </div>
              </td>";

          $tabla.= "</tr>";



          $i++;
      }

      return $tabla;

  }


  function login($usuario='', $password=''){

      $datos = $this->db->query("SELECT COUNT(*) AS n FROM usuarios WHERE
      name_usr='$usuario' AND pass_usr='$password' LIMIT 1");

      $row = $datos->row();
      return $row->n;

  }


  function deleteUser($id){
      $this->db->where('id_usr', $id);
      $this->db->delete('usuarios');
  }

  function createUser($data){
      $this->db->insert('usuarios', $data);
  }

  function getUser($id){
      return $this->db->get_where('usuarios', 'id_usr='.$id, "1");
  }

  function updateUser($data, $id){

      $sql = $this->db->update_string('usuarios', $data, "id_usr=".$id);

      $this->db->query($sql);
  }


}
