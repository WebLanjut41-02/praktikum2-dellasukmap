<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class dblogin extends CI_Model {
   	function mlogin($table, $where){
    	return $this->db->get_where($table, $where);
       // $query = "Select * from karyawan";
       // $data = $this->db->query($query);
       // return $data->result();
   }
}


?>