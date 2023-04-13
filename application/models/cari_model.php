<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_model extends CI_Model {

	
	public function cariData()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from t_dataskripsi where judul_skripsi like '%$cari%' ");
		return $data->result();
	}


}
