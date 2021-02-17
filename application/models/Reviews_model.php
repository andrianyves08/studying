<?php
	class Reviews_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_limit(){
    	$this->db->limit(4);
		$query = $this->db->get('reviews');
		return $query->result_array();
	}

	public function get_reviews($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('date', 'DESC');
			$query = $this->db->get('reviews');;
			return $query->result_array();
		}

		$query = $this->db->get_where('reviews', array('id' => $id));

		return $query->row_array();
	}

	public function get_niche(){
		$this->db->select('count(*) as ID, niche');
		$this->db->order_by('niche', 'ASC');
		$this->db->group_by('niche');
		$query = $this->db->get_where('reviews');

		return $query->result_array();
	}

	public function create_review($name, $description, $rating, $niche, $location, $url, $admin_ID){
		$this->db->trans_begin();

		$data = array(
			'reviewers_name' => strtolower($name),
			'description' => strtolower($description),
			'rating' => strtolower($rating),
			'niche' => strtolower($niche),
			'location' => strtolower($location),
			'url' => $url,
			'admin_ID' => $admin_ID
		);

		$this->db->insert('reviews', $data);
		
		if ($this->db->trans_status() === FALSE){
		    $this->db->trans_rollback();
		    return false;
		} else{
		    $this->db->trans_commit();
		    return true;
		}
		
	}

	public function update_review($id, $name, $description, $rating, $niche, $location, $url, $admin_ID){
		$this->db->trans_begin();
		
		$data = array(
			'reviewers_name' => strtolower($name),
			'description' => strtolower($description),
			'rating' => strtolower($rating),
			'niche' => strtolower($niche),
			'location' => strtolower($location),
			'url' => $url,
			'admin_ID' => $admin_ID
		);

		$this->db->where('id', $id);
		$this->db->update('reviews', $data);

		if ($this->db->trans_status() === FALSE){
		    $this->db->trans_rollback();
		    return false;
		} else{
		    $this->db->trans_commit();
		    return true;
		}
	}

	public function delete_review($id){
		$this->db->delete('reviews', array('id' => $id));
	}

	
	public function total_reviews(){
		return $this->db->count_all_results('reviews');
	}

}