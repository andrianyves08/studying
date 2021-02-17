<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function faq(){
		$page = 'Frequently Asked Questions';
		$data['title'] = ucfirst($page);
		$data['meta_title'] = 'Studying.com Frequently Asked Questions';
		$data['meta_description'] = 'Studying.com Frequently Asked Questions';
		$data['meta_keywords'] = 'Studying.com, Frequently Asked Questions';
		$data['settings'] = $this->settings_model->get_settings();
		$data['faqs'] = $this->pages_model->get_studying_faqs();
		$data['categories'] = $this->pages_model->get_categories();

		// $this->output->cache(720);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/main_nav', $data);
		$this->load->view('pages/faq', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
	}

	public function index(){
		$page = 'index';
		$data['title'] = ucfirst($page);
		// $this->output->cache(720);
		$data['meta_title'] = 'Studying.com';
		$data['meta_description'] = 'A Multi-Variant learning system that specializes in dropshipping,digital marketing and creating a brand. Tailored courses specifically made according to your needs with an ongoing mission to create 1000 success stories!';
		$data['meta_keywords'] = 'dropshipping made it easy, dropshipping, learn dropshipping online, easy dropshipping, dropshipping course, multi-varianted dropshipping course';
		$data['settings'] = $this->settings_model->get_settings();
		$data['reviews'] = $this->reviews_model->get_limit();
		$data['resources'] = $this->resources_model->get_limit();

		/*
		 Load the reCAPTCHA library.
		 You can pass the keys here by passing an array to the loader.
		 Check the "Setting the keys" section for more details
		*/
		$this->load->library('recaptcha');

		/*
		 Create the reCAPTCHA box.
		 You can pass an array of attributes to this method.
		 Check the "Creating the reCAPTCHA box" section for more details
		*/
		$recaptcha = $this->recaptcha->create_box();

		$data['recaptcha'] = $recaptcha;

		// Check if the form is submitted
		if($this->input->post('action') === 'submit')
		{
			/*
			 Check if the reCAPTCHA was solved
			 You can pass arguments to the `is_valid` method,
			 but it should work fine without any.
			 Check the "Validating the reCAPTCHA" section for more details
			*/
			$is_valid = $this->recaptcha->is_valid();

			if($is_valid['success'])
			{
				echo "reCAPTCHA solved";
			}
			else
			{
				echo "reCAPTCHA not solved/an error occured";
			}
		}
		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
        
	}

	public function reviews(){
		$page = 'reviews';
		$data['title'] = ucfirst($page);
		// $this->output->cache(720);
		$data['meta_title'] = 'Studying.com Reviews';
		$data['meta_description'] = 'Studying.com reviews';
		$data['meta_keywords'] = 'studying.com reviews, reviews for studying.com';
		$data['settings'] = $this->settings_model->get_settings();
		$data['reviews'] = $this->reviews_model->get_reviews();
		$data['niches'] = $this->reviews_model->get_niche();

		$data['total_reviews'] = $this->reviews_model->total_reviews();
		
		$this->load->view('templates/header', $data);
       // $this->load->view('templates/main_nav', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
        
	}

	public function career(){
		$page = 'career';
		$data['title'] = ucfirst($page);
		// $this->output->cache(720);
		$data['meta_title'] = 'Studying.com career';
		$data['meta_description'] = 'Studying.com career';
		$data['meta_keywords'] = 'studying.com career, career for studying.com';
		$data['settings'] = $this->settings_model->get_settings();
		$data['pages'] = $this->settings_model->get_pages(8);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/main_nav', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
        
	}

	public function resources(){
		$page = 'resources';
		$data['title'] = ucfirst($page);
		// $this->output->cache(720);
		$data['settings'] = $this->settings_model->get_settings();
		$data['meta_title'] = 'Studying.com Resources';
		$data['meta_description'] = 'Studying.com resources where you can learn and help you to grow your dropshipping business';
		$data['meta_keywords'] = 'studying.com reviews, reviews for studying.com';
		$data['all_resources'] = $this->resources_model->get_resources_by_slug(5, 0, FALSE, 3);
		$data['resources_categories'] = $this->resources_model->get_resources_categories();
		$data['categories'] = $this->resources_model->get_categories();
		$data['types'] = $this->resources_model->get_type();

		$this->load->view('templates/header', $data);
        //$this->load->view('templates/main_nav', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
	}

	public function posts($slug){
		$page = 'post';
		$data['title'] = ucwords($page);
		// $this->output->cache(720);
		$data['settings'] = $this->settings_model->get_settings();
		$data['content'] = $this->resources_model->get_resources_by_slug(NULL, NULL, $slug, 3);
		if(!$data['content']){
			show_404();
		}
		$data['categories'] = $this->resources_model->get_resources_categories($slug);
		$data['keywords'] = $this->resources_model->get_resources_keywords($slug);
		$data['other_articles'] = $this->resources_model->get_other_resources($slug);
		$data['files'] = $this->resources_model->get_files($slug);
		$data['meta_title'] = $data['content']['title'];
		$data['meta_description'] = substr($data['content']['description'], 0, 140);
		$data['meta_keywords'] = $this->resources_model->get_resources_keywords($slug);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/main_nav', $data);
		$this->load->view('pages/resources-content', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
	}


	public function about(){
		$page = 'about';
		$data['title'] = ucfirst($page);
		// $this->output->cache(720);
		$data['settings'] = $this->settings_model->get_settings();
		$data['meta_title'] = $data['title'];
		$data['meta_description'] = 'Studying.com About Us';
		$data['meta_keywords'] = 'Studying.com, About';
		$data['pages'] = $this->settings_model->get_pages(7);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/main_nav', $data);
		$this->load->view('pages/about', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
        
	}

	public function terms_and_conditions(){
		$page = 'terms and conditions';
		$data['title'] = ucfirst($page);
		// $this->output->cache(720);
		$data['settings'] = $this->settings_model->get_settings();
		$data['meta_title'] = $data['title'];
		$data['meta_description'] = 'Studying.com Terms and Conditions';
		$data['meta_keywords'] = 'Studying.com, Terms and Conditions';
		$data['pages'] = $this->settings_model->get_pages(5);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/main_nav', $data);
		$this->load->view('pages/terms-and-conditions', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
        
	}

	public function privacy_policy(){
		$page = 'privacy policy';
		$data['title'] = ucfirst($page);
		// $this->output->cache(720);
		$data['settings'] = $this->settings_model->get_settings();
		$data['meta_title'] = $data['title'];
		$data['meta_description'] = 'Studying.com Privacy Policy';
		$data['meta_keywords'] = 'Studying.com, Privacy Policy';
		$data['pages'] = $this->settings_model->get_pages(6);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/main_nav', $data);
		$this->load->view('pages/privacy-policy', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
        
	}

	function get_reviews(){
		$id = $this->input->post('id');
		$create = $this->reviews_model->get_reviews($id);
		if(empty($create['testimonial'])){
			$testimonial = 'Not Applicable';
		} else {
			$testimonial = $create['testimonial'];
		}

		if(empty($create['testimonial'])){
			$testimonial = 'Not Applicable';
		} else {
			$testimonial = $create['testimonial'];
		}

		$data = array(
			'title' => ucwords($create['title']),
			'name' => ucwords($create['reviewers_name']),
			'testimonial' => ucfirst($testimonial),
			'description' => ucfirst($create['description']),
			'location' => ucwords($create['location']),
			'date' => $create['date']
		);
		echo json_encode($data);
	}

	function load_more() {
		$posts = $this->resources_model->get_resources_by_slug(5, $this->input->post('start'), FALSE, $this->input->post('type'));
		$output = '';

		foreach($posts as $post){
			$output .= '<div class="row justify-content-center post_'.$this->input->post('type').'">
							<div class="col-lg-4 mb-4 view overlay zoom">
								<img src="https://app.studying.com/assets/img/blogs/'.$post['banner'].'" class="img-fluid z-depth-1-half img-id-2" alt="">
							</div>
							<div class="col-lg-3 mb-4">
								<h6 class="h6 indigo-text">'.ucwords($post['type_name']).'</h6>
								<h3 class="customfont_header">'.ucwords($post['title']).'</h3>
								<p class="font-weight-bold h4">';
						if(strlen($post['description']) > 80){
			$output .=		substr(ucfirst($post['description']), 0, 80);
						} else {
			$output .=		ucfirst($post['description']);
						} 
			$output .=			'</p>
								<a href="'.base_url('./'.$post['slug']).'">Read More <i class="fas fa-angle-double-right ml-1"></i></a>
								<p class="mt-auto">'.date("F d, Y", strtotime($post['timestamp'])).'</p>
							</div>
						</div>';
		}
		echo $output;
	}
}