<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class dbpaket extends CI_Model {
    function tampil_data(){
    	return $this->db->get('paket');
    }
    function input_data($data,$table){
    	$this->db->insert($table,$data);
    }

}


?>

