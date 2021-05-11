<?php
	class Pages_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

	public function get_all_faqs($id = FALSE){
		if($id === FALSE){
			$query = $this->db->get('faqs');
			return $query->result_array();
		}
		$query = $this->db->get_where('faqs', array('id' => $id));
		return $query->row_array();
	}

	public function get_studying_faqs($id = FALSE){
		$this->db->where('type', '2');
		$this->db->order_by('faqs.question', 'ASC');
		if($id === FALSE){
			$query = $this->db->get('faqs');
			return $query->result_array();
		}
		$this->db->where('id', $id);
		$query = $this->db->get('faqs');
		return $query->row_array();
	}

	public function get_categories(){
		$this->db->select('category.name as name, category.id as id');
		$this->db->join('category', 'faqs.category_ID = category.id');
		$this->db->group_by('faqs.category_ID');
		$this->db->order_by('category.name', 'ASC');
		$this->db->where('faqs.type', '2');
		$query = $this->db->get('faqs');
		return $query->result_array();
	}

	public function send_message($message, $email, $name){
		$this->db->trans_begin();

		$data = array(
			'message' => $message,
			'name' => $name,
			'email' => $email,
		);

		$this->db->insert('messages_support', $data);
		
		if ($this->db->trans_status() === FALSE){
		    $this->db->trans_rollback();
		    return false;
		} else{
		    $this->db->trans_commit();
		    return true;
		}
	}
}