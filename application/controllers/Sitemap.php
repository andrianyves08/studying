<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {
	 public function index() {
        $this->load->database();
        $query = $this->db->get("resources");
        $data['resources'] = $query->result();
 
 
        $this->load->view('pages/sitemap', $data);
    }

}
