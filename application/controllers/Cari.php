<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cari extends CI_Controller {

    public function index()
	{
        
        
        $this->load->view("hasil");
        
    }
 
	public function cari1() 
	{
        
        $this->load->view("hasil");
        
	}
 
	public function hasil()
	{
        $this->load->model("cari_model");
        $data2['cari'] = $this->cari_model->cariData();
        
        $this->load->view('hasil_cari', $data2);
        
    }
    
}