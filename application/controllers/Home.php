<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Project_model');
		$this->load->model('Blog_model');
		$this->Global = $this->Global_model->getdata();
		$this->Global['services'] = $this->Global_model->getservices('status','1');
		$this->Global['mainservices'] = $this->Global_model->getmainservices('homepage','on');
		$this->Global['process'] = $this->Global_model->getactiveprocess();
		//$this->Global['headertreatments'] = $this->Project_model->getdata('status','1');
		$this->Global['sliders'] = $this->Global_model->getactivesliders();
		$this->Global['gallery'] = $this->Global_model->getactivegallery();
		$this->Global['videos'] = $this->Global_model->getactivevideogallery();
		$this->Global['clients'] = $this->Global_model->getactiveclients();
		$this->Global['blogs'] = $this->Blog_model->get_posts();
		$this->Global['reviews'] = $this->Global_model->getactivereviews();
		$this->Global['plans'] = $this->Global_model->getactiveplans();
	}

	public function index()
	{
		$this->Global['about'] = $this->Global_model->getpage("about")[0];
		$this->Global['whychoose'] = $this->Global_model->getpage("whychoose")[0];
		$this->Global['vision'] = $this->Global_model->getpage("vision")[0];
		$this->load->view('front/index', $this->Global);
	}
	public function about()
	{
		$this->Global['about'] = $this->Global_model->getpage("about")[0];
		$this->load->view('front/about', $this->Global);
	}
	public function gallery()
	{
		$this->Global['projects'] = $this->Global_model->getactivegallery();
		$this->load->view('front/gallery', $this->Global);
	}

	public function services()
	{
		$this->Global['services'] = $this->Global_model->getservices('status','1');
		$this->load->view('front/product', $this->Global);
	}
	public function service($req)
	{
		$this->Global['oneservices'] = $this->Global_model->getoneservices($req);

		$this->load->view('front/product-det', $this->Global);
	}

	public function testimonals()
	{
		$this->load->view('front/testimonals', $this->Global);
	}
	// public function blogs()
	// {
	// 	$this->Global['blogs'] = $this->Blog_model->getactiveposts();
	// 	$this->load->view('front/blogs', $this->Global);
	// }

	public function contact()
	{
		$this->load->view('front/contact', $this->Global);
	}

	// public function products($req = null)
	// {
	// 	if ($this->Project_model->checkservices($req)) {
	// 		$this->Global['details'] = $this->Project_model->get_service($req);
	// 		$this->load->view('front/product-detail', $this->Global);
	// 	} else if($req == null) {
	// 		$this->load->view('front/our-courses', $this->Global);
	// 	} else {
	// 		redirect('home');
	// 	}
	// }

	public function save(){
		$data = $_POST;
		unset($data["submit"]);
		$this->Global['project'] = $this->Global_model->save($data);
		$data['toemail'] = array('lead@gdigitalindia.com','gdigitalindialeads@gmail.com',admin_email);
		$mail_message = sitename." Enquiry";
		$mail_message .="<br/>Name - ".$_REQUEST['name'];
		$mail_message .="<br/>Email - ".$_REQUEST['email'];
		$mail_message .="<br/>Mobile - ".$_REQUEST['phoneno'];
		$mail_message .="<br/>Message - ".$_REQUEST['message'];
		$data['message'] = $mail_message;
		$this->Global_model->send_mail($data);
	}

	public function enquiry(){
		$data = $_POST;
		$this->Global_model->enquiry($data);
		$data['toemail'] = array('lead@gdigitalindia.com','vishwasmoorjani@gdigitalindia.com','gdigitalindialeads@gmail.com',admin_email);
		$data['subject'] = sitename." Enquiry";
		$mail_message = sitename." Enquiry";
		$mail_message .="<br/>Name - ".$_REQUEST['name'];
		$mail_message .="<br/>Email - ".$_REQUEST['email'];
		$mail_message .="<br/>Mobile - ".$_REQUEST['contact'];
		$mail_message .="<br/>Whatsapp - ".$_REQUEST['whatsapp'];
		$mail_message .="<br/>City - ".$_REQUEST['city'];
		$mail_message .="<br/>Message - ".$_REQUEST['message'];
		$mail_message .="<br/>Request For - ".$_REQUEST['requestfor'];
		$data['message'] = $mail_message;
		$this->Global_model->send_mail($data);
		redirect('thanks');
}

	public function blogs()//index page
    {
        $this->Global['posts'] = $this->Blog_model->get_posts();
        $this->load->view('front/blog', $this->Global);
    }

    function blog($slug)//single post page
    {
		$this->Global['related'] = $this->Blog_model->get_posts();
        $this->Global['blog'] = $this->Blog_model->get_post($slug);
        $this->load->view('front/blog-det', $this->Global);
    }

	public function thanks(){
		$this->load->view('front/thanks', $this->Global);
	}
	
}
