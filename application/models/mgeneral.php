<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mgeneral extends CI_Model{
	function login1($user,$pass){
		$this->db->select("
			*
		",false);
		$this->db->from("usuario");
		$this->db->where("username",$user);
		$this->db->where("password",$pass);
		$query=$this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}
		return false;
	}
	public function login($codigo){
		$this->db->select('*',false);
		$this->db->from("users");
		$this->db->where("user_codigo",$codigo);
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return $query->result();
		}
		return false;
	}
	public function query($query){
		$query=$this->db->query($query);
		if($query->num_rows()>0){
			return $query->result();
		}
		return false;
	}
	public function insertar($tabla,$data){
		$this->db->insert($tabla,$data);
		$result=$this->db->affected_rows();
		return $result;
	}
	public function actualizar($tabla,$where,$data){
		$this->db->where($where);
		$this->db->update($tabla,$data);
		$result=$this->db->affected_rows();
		return $result;
	}
	public function actualizar_doble($tabla,$where,$where1,$data){
		$this->db->where($where);
		$this->db->where($where1);
		$this->db->update($tabla,$data);
		$result=$this->db->affected_rows();
		return $result;
	}
	public function eliminar($tabla,$where){
		$this->db->delete($tabla,$where);
		$result=$this->db->affected_rows();
		return $result;
	}
	function ultimo_ide(){
		$this->db->select("
			last_insert_id() as ide
		",false);
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		return false;
	}
	public function get_data($tabla,$where=false,$like=false,$order=false){
		$this->db->select("*");
		$this->db->from($tabla);
		if($where!=false)
			$this->db->where($where);
		if($like!=false)
			$this->db->like($like);
		if($order!=false)
			$this->db->order_by($order,'desc');
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function get_data_select($tabla,$select,$where=false){
		$this->db->select(implode(',',$select));
		$this->db->from($tabla);
		if($where!=false)
			$this->db->where($where);
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}	
		
	}
	public function get_detalle_producto($id){
		$this->db->select('*');
		$this->db->from('producto p');
		$this->db->join('area a','p.area_id_area = a.id_area');
		$this->db->join('encargado e','p.encargado_id_encargado = e.id_encargado');
		$this->db->where('id_producto',$id);
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		return false;
	}
	public function get_accesos(){
		$this->db->select("
			*
		",false);
		$this->db->from("roles r");
		$this->db->join('usuario_and_roles ua','ua.roles_rol_id= r.rol_id');
		$this->db->where("ua.usuario_idusuario",$this->session->userdata("id"));
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}
		return false;
	}
	function enum_values($tabla, $campo) {
        $consulta = $this->db->query("SHOW COLUMNS FROM $tabla LIKE '$campo'");
        if ($consulta->num_rows() > 0) {
            $consulta = $consulta->row();
            $array = explode(",", str_replace(array("enum", "'", "(", ")"), "", $consulta->Type));
            foreach ($array as $key) {
                $array2[$key] = $key;
            }
            return $array2;
        } else {
            return FALSE;
        }
    }
    function insertar_liquidacion($tabla,$data){
    	$this->db->insert($tabla,$data);
		$result=$this->db->insert_id();
		return $result;
    }
    function obtener_id_ultimo($tabla,$id){
    	$this->db->select('max('.$id.') + 1 as id');
    	$this->db->from($tabla);
    	$consulta = $this->db->get();
    	$resp = $consulta->row();
    		return $resp;
    }
    function insertar_id_return($tabla,$data){
    	$this->db->insert($tabla,$data);
		$result=$this->db->insert_id();
		return $result;
    }
}
?>