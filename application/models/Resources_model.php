<?php
	class Resources_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_limit(){
    	$this->db->order_by('timestamp', 'DESC');
    	$this->db->limit(3);
		$query = $this->db->get('resources');
		return $query->result_array();
	}

	public function get_other_resources($slug){
		$this->db->order_by('rand()');
		$this->db->where('slug !=', $slug);
		$this->db->limit(4);
		$query = $this->db->get('resources');
		return $query->result_array();
	}

	public function get_files($slug){
		$this->db->select('resources_files.*');
		$this->db->join('resources', 'resources.id = resources_files.resource_ID');
		$this->db->where('resources.slug', $slug);
		$query = $this->db->get('resources_files');
		return $query->result_array();
	}

	public function get_resources_by_slug($limit, $start, $slug = FALSE, $type){
		$this->db->select('*, resources_type.name as type_name');
    	$this->db->join('resources_type', 'resources_type.id = resources.type');
    	if($type != 3){
			$this->db->where('resources.type',  $type);
		}
    	if(!empty($limit)){
			$this->db->limit($limit, $start);
		}
    	if($slug === FALSE){
    		$this->db->order_by('resources.timestamp', 'DESC');
			$query = $this->db->get('resources');;
			return $query->result_array();
		}

		$this->db->where('slug',  $slug);
		$query = $this->db->get_where('resources');

		return $query->row_array();
	}

	public function get_resources_categories($slug = FALSE){
		$this->db->select('*, resources_type.name as type_name');
    	$this->db->join('resources_type', 'resources_type.id = resources.type');
    	$this->db->join('resources_category', 'resources_category.resource_ID = resources.id');
    	$this->db->join('category', 'category.id = resources_category.category_ID');
    	
    	if($slug === FALSE){
    		$this->db->order_by('timestamp', 'ASC');
			$query = $this->db->get('resources');;
			return $query->result_array();
		}

		$this->db->where('slug',  $slug);
		$query = $this->db->get('resources');

		return $query->result_array();
	}

	public function get_resources_keywords($slug){
		$this->db->select('*, keywords.name as keywords_name');
    	$this->db->join('resources_keywords', 'resources_keywords.resource_ID = resources.id');
    	$this->db->join('keywords', 'keywords.id = resources_keywords.keyword_ID');
    	$this->db->where('resources.slug',  $slug);

		$query = $this->db->get('resources');

		return $query->result_array();
	}

	public function get_categories($id = FALSE){
		if($id === FALSE){
			$query = $this->db->get('category');;
			return $query->result_array();
		}

		$query = $this->db->get_where('category', array('id' => $id));

		return $query->row_array();
	}

	public function get_type($id = FALSE){
		if($id === FALSE){
			$query = $this->db->get('resources_type');;
			return $query->result_array();
		}

		$query = $this->db->get_where('resources_type', array('id' => $id));

		return $query->row_array();
	}
	

}