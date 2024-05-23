<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		// Load form validation ibrary & user model 
		$this->load->library('form_validation');
		$this->load->model('Admin_model');
		$this->load->model('Blog_model');
		$this->load->model('Project_model');

		// Admin login status 
		$this->isAdminLoggedIn = $this->session->userdata('isAdminLoggedIn');
		$this->Global = $this->Global_model->getdata();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		if (isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/dashboard');
		} else {
			redirect('admin/login');
		}
	}
	public function dashboard()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->Global['todayappointment'] = $this->db->query("Select * from appointment where date >= CURDATE()")->num_rows();
			$this->load->view('admin/dashboard', $this->Global);
		}
	}

	public function about()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				$this->Global['name'] = 'about';
				if (!empty($_FILES['image']['name'])) {
					$image = $this->upload('image', '');
					$this->Global['image'] = $image['file_name'];
				} else {
					unset($this->Global['image']);
				}
				if (!empty($_FILES['image2']['name'])) {
					$image2 = $this->upload('image2', '');
					$this->Global['image2'] = $image2['file_name'];
				} else {
					unset($this->Global['image2']);
				}
				unset($this->Global["submit"]);
				$this->Global_model->editpage($this->Global);
				redirect('admin/about');
			}
			$a = $this->Global_model->getpage("about");
			$this->Global["pagecontent"] = $a[0];
			$this->load->view('admin/about', $this->Global);
		}
	}
	public function whychoose()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				$this->Global['name'] = 'whychoose';
				if (!empty($_FILES['image']['name'])) {
					$image = $this->upload('image', '');
					$this->Global['image'] = $image['file_name'];
				} else {
					unset($this->Global['image']);
				}
				if (!empty($_FILES['image2']['name'])) {
					$image2 = $this->upload('image2', '');
					$this->Global['image2'] = $image2['file_name'];
				} else {
					unset($this->Global['image2']);
				}
				unset($this->Global["submit"]);
				$this->Global_model->editpage($this->Global);
				redirect('admin/whychoose');
			}
			$a = $this->Global_model->getpage("whychoose");
			$this->Global["pagecontent"] = $a[0];
			$this->load->view('admin/whychoose', $this->Global);
		}
	}

	
	public function removewhychoose($field='image')
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->db->query("Update pages set $field = NULL where name = 'whychoose'");
			echo ("done");
		}
	}

	public function removeabout($field='image')
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->db->query("Update pages set $field = NULL where name = 'about'");
			echo ("done");
		}
	}

	public function vision()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				$this->Global['name'] = 'vision';
				if (!empty($_FILES['image']['name'])) {
					$image = $this->upload('image', '');
					$this->Global['image'] = $image['file_name'];
				} else {
					unset($this->Global['image']);
				}
				unset($this->Global["submit"]);
				$this->Global_model->editpage($this->Global);
				redirect('admin/vision');
			}
			$a = $this->Global_model->getpage("vision");
			$this->Global["pagecontent"] = $a[0];
			$this->load->view('admin/vision', $this->Global);
		}
	}

	
	public function removevision($field='image')
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->db->query("Update pages set $field = NULL where name = 'vision'");
			echo ("done");
		}
	}

	public function login()
	{
		if (isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/dashboard');
		} else {
			$this->Global = array();
			// If login request submitted 
			if (isset($_POST['loginSubmit'])) {
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('password', 'password', 'required');

				if ($this->form_validation->run() == true) {
					$con = array(
						'returnType' => 'single',
						'conditions' => array(
							'email' => $this->input->post('email'),
							'password' => sha1($this->input->post('password')),
						)
					);
					$checkLogin = $this->Admin_model->getRows($con);
					if ($checkLogin) {
						$this->session->set_userdata('isAdminLoggedIn', TRUE);
						$this->session->set_userdata('userId', $checkLogin['id']);
						redirect('admin/dashboard/');
					} else {
						$this->session->set_flashdata('error_msg', ' Wrong email or password, please try again.');
					}
				} else {
					$this->session->set_flashdata('error_msg', ' Please fill all the mandatory fields.');
				}
			}

			// Load view 
			$this->load->view('admin/sign-in', $this->Global);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('isAdminLoggedIn');
		$this->session->unset_userdata('userId');
		$this->session->sess_destroy();
		redirect('admin/login');
	}

	public function forgot_password()
	{
		if (isset($_POST['email'])) {
			$email = $this->input->post('email');
			$findemail = $this->Admin_model->ForgotPassword($email);
			if ($findemail) {
				$this->Admin_model->sendpassword($findemail);
			} else {
				$this->session->set_flashdata('error_msg', ' Email not found!');
				redirect(base_url() . 'admin/login', 'refresh');
			}
		}
		$this->load->view('admin/forgot');
	}
	
	public function appointments()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->model('Project_model');
			$query = $this->db->query("Select * from appointment order by date desc");
			$this->Global['appointments'] = $query->result_array();
			$this->load->view('admin/appointments', $this->Global);
		}
	}

		
	public function plans()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->Global['plans'] = $this->Global_model->getplans();
			$this->load->view('admin/plans', $this->Global);
		}
	}
	
	public function addplan()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				$title = $_POST['name'];
				$table = "plans";
				$field = "link";
				$this->Global['link'] =  $this->create_slug($title, $table, $field);
				$image = $this->upload('image', '');
				$this->Global['image'] = $image['file_name'];
				unset($this->Global["submit"]);
				$this->load->model('Project_model');
				$this->Admin_model->addplan($this->Global);
			}
			$this->load->view('admin/add-plan');
		}
	}

	public function editplan($slug)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				if (!empty($_FILES['image']['name'])) {
					$image = $this->upload('image', '');
					$this->Global['image'] = $image['file_name'];
				}
				unset($this->Global['submit']);
				$this->Admin_model->editplan($this->Global);
			}
			$this->load->model('Project_model');
			$plan = $this->Global_model->getplans('link', `$slug`);
			$this->Global['plan'] = $plan[0];
			$this->load->view('admin/edit-plan', $this->Global);
		}
	}

	public function removeplans($link = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->model('Project_model');
			$this->Project_model->removeimg('plans', $link);
			echo ("done");
		}
	}
	public function process()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->Global['process'] = $this->Global_model->getprocess();
			$this->load->view('admin/clients', $this->Global);
		}
	}
	public function addprocess()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				$title = $_POST['name'];
				$table = "clients";
				$field = "link";
				$this->Global['link'] =  $this->create_slug($title, $table, $field);
				// $image = $this->upload('image', '');
				// $this->Global['image'] = $image['file_name'];
				unset($this->Global["submit"]);
				$this->Admin_model->addprocess($this->Global);
			}
			$this->load->view('admin/add-client');
		}
	}
	public function services()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->Global['services'] = $this->Global_model->getservices();
			$this->load->view('admin/services', $this->Global);
		}
	}

	public function addservice()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				$title = $_POST['name'];
				$table = "services";
				$field = "link";
				$this->Global['link'] =  $this->create_slug($title, $table, $field);
				 $image = $this->upload('image', '');
				 $this->Global['image'] = $image['file_name'];
				unset($this->Global["submit"]);
				$this->Admin_model->addservice($this->Global);
			}
			$this->load->view('admin/add-service');
		}
	}

	public function editservices($slug)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				if ($_POST['homepage'] != "on") {
					$_POST['homepage'] = NULL;
				}
				$this->Global = $_POST;
				if (!empty($_FILES['image']['name'])) {
					$image = $this->upload('image', '');
					$this->Global['image'] = $image['file_name'];
				}
				// print_r($this->Global);
				// die();
				unset($this->Global["submit"]);
				$this->Admin_model->editservice($this->Global);
			}
			$service = $this->Global_model->getservices('id', $slug);
			$this->Global['service'] = $service[0];
			$this->load->view('admin/edit-service', $this->Global);
		}
	}

	public function removeservice($link = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->model('Project_model');
			$this->Project_model->removeimg('services', $link);
			echo ("done");
		}
	}

	public function editprocess($slug)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				// if (!empty($_FILES['image']['name'])) {
				// 	$image = $this->upload('image', '');
				// 	$this->Global['image'] = $image['file_name'];
				// }
				unset($this->Global["submit"]);
				$this->Admin_model->editprocess($this->Global);
			}
			$process = $this->Global_model->geteditprocess($slug);
			$this->Global['eprocess'] = $process[0];
			$this->load->view('admin/edit-client', $this->Global);
		}
	}
	public function upload($file, $dir = '')
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$config['upload_path']          = FCPATH . 'assets/front/images' . $dir;
			$config['allowed_types']        = 'gif|jpg|png|jpeg|webp|svg|pdf|mp4|mkv|mov|webm';

			$this->load->library('upload', $config);

			$this->upload->initialize($config);
			if (!$this->upload->do_upload($file)) {
				$this->Global['error_message'] =  $this->upload->display_errors();
				$this->session->set_flashdata('error_msg', $this->Global['error_message']);
				redirect($_SERVER['HTTP_REFERER']);
			} else {
				return $this->upload->data();
			}
		}
	}

	public function create_slug($name, $table, $field)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			// Use this code to create a slug
			// $title = "My name is Vishwas Moorjani";
			// $table = "project";
			// $field = "link";
			// $a =  $this->create_slug($title, $table, $field);

			$slug = $name;
			$slug = url_title($name);
			$key = NULL;
			$value = NULL;
			$i = 0;
			$params = array();
			$params[$field] = $slug;

			if ($key) $params["$key !="] = $value;

			while ($this->db->from($table)->where($params)->get()->num_rows()) {
				if (!preg_match('/-{1}[0-9]+$/', $slug))
					$slug .= '-' . ++$i;
				else
					$slug = preg_replace('/[0-9]+$/', ++$i, $slug);
				$params[$field] = $slug;
			}

			return strtolower($slug);
		}
	}

	public function activate($table = NULL, $link = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->model('Project_model');
			$this->Project_model->activate($table, $link);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function deactivate($table = NULL, $link = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->model('Project_model');
			$this->Project_model->deactivate($table, $link);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function delete($table = NULL, $link = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->model('Project_model');
			$this->Project_model->delete($table, $link);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	// public function removeimg($link = NULL)
	// {
	// 	if (!isset($_SESSION['isAdminLoggedIn'])) {
	// 		redirect('admin/login');
	// 	} else {
	// 		$this->load->model('Project_model');
	// 		$this->Project_model->removeimg('project', $link);
	// 		echo ("done");
	// 	}
	// }


	public function removeimage($link = NULL, $row = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->model('Project_model');
			$images = $this->Project_model->getimages($link);
			$target_value = $row;
			$a = "";
			$array = (json_decode($images->images));
			foreach ($array as $key => $value) {
				if ($value == $target_value) {
					unset($array[$key]);
				} else {
					$a = $a . json_encode($value) . ",";
				}
			}
			$a = "[" . (trim($a, ",")) . "]";
			$this->Project_model->saveimage($link, $a);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function removeslider($link = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->Global_model->removeimg('slider', $link);
			echo ("done");
		}
	}

	public function sliders()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->Global['sliders'] = $this->Global_model->getslider();
			$this->load->view('admin/sliders', $this->Global);
		}
	}
	
	public function addslider()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$title = rand(100, 10000);
				$table = "slider";
				$field = "link";
				$slug =  $this->create_slug($title, $table, $field);
				$this->Global = $_POST;
				$this->Global['location'] = 'slider';
				$this->Global['link'] = $slug;
				$image = $this->upload('image', '');
				$this->Global['image'] = $image['file_name'];
				unset($this->Global["submit"]);
				$this->Global_model->addslider($this->Global);
			}
			$this->Global['sliders'] = $this->Global_model->getslider();
			$this->load->view('admin/add-slider', $this->Global);
		}
	}
	public function editslider($link)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				if (!empty($_FILES['image']['name'])) {
					$image = $this->upload('image', '');
					$this->Global['image'] = $image['file_name'];
				}
				unset($this->Global["submit"]);
				$a = $this->Global_model->editslider($this->Global);
				redirect('admin/sliders');
			}
			$slider = $this->Global_model->getsliderimage($link);
			$this->Global['slider'] = $slider[0];
			$this->load->view('admin/edit-slider', $this->Global);
		}
	}

	public function gallery()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->Global['sliders'] = $this->Global_model->getgallery();
			$this->load->view('admin/gallery', $this->Global);
		}
	}

	public function vgallery()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->Global['sliders'] = $this->Global_model->getvideogallery();
			$this->load->view('admin/vgallery', $this->Global);
		}
	}

	// public function clients()
	// {
	// 	if (!isset($_SESSION['isAdminLoggedIn'])) {
	// 		redirect('admin/login');
	// 	} else {
	// 		$this->Global['sliders'] = $this->Global_model->getclients();
	// 		$this->load->view('admin/clients', $this->Global);
	// 	}
	// }

	// public function addclients()
	// {
	// 	if (!isset($_SESSION['isAdminLoggedIn'])) {
	// 		redirect('admin/login');
	// 	} else {
	// 		if (isset($_POST['submit'])) {
	// 			$title = rand(100, 10000);
	// 			$table = "slider";
	// 			$field = "link";
	// 			$slug =  $this->create_slug($title, $table, $field);
	// 			$this->Global = $_POST;
	// 			$this->Global['location'] = 'clients';
	// 			$this->Global['link'] = $slug;
	// 			$image = $this->upload('image', '');
	// 			$this->Global['image'] = $image['file_name'];
	// 			unset($this->Global["submit"]);
	// 			$this->Global_model->addgallery($this->Global);
	// 		}
	// 		$this->Global['sliders'] = $this->Global_model->getgallery();
	// 		$this->load->view('admin/add-client', $this->Global);
	// 	}
	// }

	// public function editclient($link)
	// {
	// 	if (!isset($_SESSION['isAdminLoggedIn'])) {
	// 		redirect('admin/login');
	// 	} else {
	// 		if (isset($_POST['submit'])) {
	// 			$this->Global = $_POST;
	// 			if (!empty($_FILES['image']['name'])) {
	// 				$image = $this->upload('image', '');
	// 				$this->Global['image'] = $image['file_name'];
	// 			}
	// 			unset($this->Global["submit"]);
	// 			$a = $this->Global_model->editgallery($this->Global);
	// 			redirect('admin/clients');
	// 		}
	// 		$slider = $this->Global_model->getclientimage($link);
	// 		$this->Global['slider'] = $slider[0];
	// 		$this->load->view('admin/edit-client', $this->Global);
	// 	}
	// }

	public function addgallery()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$title = rand(100, 10000);
				$table = "slider";
				$field = "link";
				$slug =  $this->create_slug($title, $table, $field);
				$this->Global = $_POST;
				$this->Global['location'] = 'gallery';
				$this->Global['link'] = $slug;
				$image = $this->upload('image', '');
				$this->Global['image'] = $image['file_name'];
				unset($this->Global["submit"]);
				$this->Global_model->addgallery($this->Global);
			}
			$this->Global['sliders'] = $this->Global_model->getgallery();
			$this->load->view('admin/add-gallery', $this->Global);
		}
	}
//video gallery controller
	public function addvideogallery()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$title = rand(100, 10000);
				$table = "slider";
				$field = "link";
				$slug =  $this->create_slug($title, $table, $field);
				$this->Global = $_POST;
				$this->Global['location'] = 'vgallery';
				$this->Global['link'] = $slug;
				//$image = $this->upload('image', '');
				//$this->Global['image'] = $_POST['value'];
				unset($this->Global["submit"]);
				$this->Global_model->addvideogallery($this->Global);
			}
			$this->Global['sliders'] = $this->Global_model->getgallery();
			$this->load->view('admin/add-gallery-video', $this->Global);
		}
	}



	public function editgallery($link)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				if (!empty($_FILES['image']['name'])) {
					$image = $this->upload('image', '');
					$this->Global['image'] = $image['file_name'];
				}
				unset($this->Global["submit"]);
				$a = $this->Global_model->editgallery($this->Global);
				redirect('admin/gallery');
			}
			$slider = $this->Global_model->getgalleryimage($link);
			$this->Global['slider'] = $slider[0];
			$this->load->view('admin/edit-gallery', $this->Global);
		}
	}

	//edit video gallery
	public function editvideogallery($link)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				if (!empty($_FILES['image']['name'])) {
					$image = $this->upload('image', '');
					$this->Global['image'] = $image['file_name'];
				}
				unset($this->Global["submit"]);
				$a = $this->Global_model->editvideogallery($this->Global);
				redirect('admin/vgallery');
			}
			$slider = $this->Global_model->getgalleryvideo($link);
			$this->Global['slider'] = $slider[0];
			$this->load->view('admin/edit-video', $this->Global);
		}
	}

	public function globalsettings()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->view('admin/globalsettings', $this->Global);
		}
	}

	public function editsettings()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$name = $_POST['name'];
				$value = $_POST['value'];
				$this->Global_model->editsettings($name, $value);
			}
			redirect('admin/globalsettings');
		}
	}

	public function change_password()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->view('admin/change-password');
		}
	}

	public function addimages($link)
	{
		if (!empty($_FILES)) {
			$config['upload_path']          = FCPATH . 'assets/front/images/properties';
			$config['allowed_types']        = 'gif|jpg|png|jpeg|webp|svg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('file')) {
				$fileData = $this->upload->data();
				$this->load->model('Project_model');
				$images = $this->Project_model->getimages($link);
				$target_value = $fileData['file_name'];
				if ($images->images == "[]") {
					$a = trim($images->images, "]") . json_encode($target_value) . "]";
				} else {
					$a = (trim($images->images, "]") . "," . json_encode($target_value)) . "]";
				}
				$insert = $this->Project_model->saveimage($link, $a);
			}
		}
		$this->load->model('Project_model');
		$result = $this->Project_model->getimages($link);
		$this->Global['link'] = $link;
		$this->Global['images'] = json_decode($result->images, true);
		$this->load->view('admin/images', $this->Global);
	}
	
	public function reviews()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->Global['reviews'] = $this->Blog_model->getreviews();
			$this->load->view('admin/reviews', $this->Global);
		}
	}
	
	public function addreview()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				//$image = $this->upload('image', '');
				//$this->Global['image'] = $image['file_name'];
				unset($this->Global["submit"]);
				$this->Blog_model->addreview($this->Global);
			}
			$this->load->view('admin/add-review');
		}
	}

	public function editreviews($slug)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$this->Global = $_POST;
				// if (!empty($_FILES['image']['name'])) {
				// 	$image = $this->upload('image', '');
				//     $this->Global['image'] = $image['file_name'];
				// }
				unset($this->Global["submit"]);
				$this->Blog_model->editreview($slug,$this->Global);
			}
			$review = $this->Blog_model->getreviews('id', $slug);
			$this->Global['review'] = $review[0];
			$this->load->view('admin/edit-review', $this->Global);
		}
	}

	public function removereviews($link = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->model('Project_model');
			$this->Project_model->removeimg('reviews', $link);
			echo ("done");
		}
	}

	public function blogs()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$data['blogs'] = $this->Blog_model->getblogs();
			$this->load->view('admin/blogs', $data);
		}
	}
	public function addblog()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$data = $_POST;
				$title = $_POST['post_title'];
				$table = "blog";
				$field = "link";
				$data['link'] =  $this->create_slug($title, $table, $field);
				
				$image = $this->upload('image', '');
				$data['image'] = $image['file_name'];
				// $blogger_image = $this->upload('blogger_image', '');
                // $data['blogger_image'] = $blogger_image['file_name'];
				unset($data["submit"]);
				$this->Blog_model->addblog($data);
			}
			$this->load->view('admin/add-blog');
		}
	}
	public function editblog($slug)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$data = $_POST;
				if (!empty($_FILES['image']['name'])) {
					$image = $this->upload('image', '');
				    $data['image'] = $image['file_name'];
				}
				// if (!empty($_FILES['blogger_image']['name'])) {
				// 	$blogger_image = $this->upload('blogger_image', '');
                //     $data['blogger_image'] = $blogger_image['file_name'];
				// }
				unset($data["submit"]);
				$this->Blog_model->editpost($slug,$data);
				
			}
			$blog = $this->Blog_model->getblogs('link', $slug);
			$data['blog'] = $blog[0];
			$this->load->view('admin/edit-blog', $data);
		}
	}
	
	public function removeblog($link = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->model('Project_model');
			$this->Project_model->removeimg('blog', $link);
			echo ("done");
		}
	}
	public function removeblogger($link = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->load->model('Project_model');
			$this->Project_model->removecat('blog', $link);
			echo ("done");
		}
	}


	// public function treatments()
	// {
	// 	if (!isset($_SESSION['isAdminLoggedIn'])) {
	// 		redirect('admin/login');
	// 	} else {
	// 		$this->Global['treatments'] = $this->Project_model->gettreatments();
	// 		$this->load->view('admin/treatments', $this->Global);
	// 	}
	// }

	// public function addtreatment()
	// {
	// 	if (!isset($_SESSION['isAdminLoggedIn'])) {
	// 		redirect('admin/login');
	// 	} else {
	// 		if (isset($_POST['submit'])) {
	// 			$title = $_POST['name'];
	// 			$table = "treatment";
	// 			$field = "link";
	// 			$slug =  $this->create_slug($title, $table, $field);
	// 			$_POST['link'] = $slug;
	// 			$this->Global = $_POST;

	// 			if (!empty($_FILES['image']['name'])) {
	// 			$image = $this->upload('image', '');
	// 			$this->Global['image'] = $image['file_name'];
	// 			}

	// 			if (!empty($_FILES['video']['name'])) {
	// 			$image = $this->upload('video', '');
	// 			$this->Global['video'] = $image['file_name'];
	// 			}

	// 			if (!empty($_FILES['whychooseimg']['name'])) {
	// 				$image = $this->upload('whychooseimg', '');
	// 				$this->Global['whychooseimg'] = $image['file_name'];
	// 			}

	// 			if (!empty($_FILES['whychoosevideo']['name'])) {
	// 				$image = $this->upload('whychoosevideo', '');
	// 				$this->Global['whychoosevideo'] = $image['file_name'];
	// 			}
	// 			unset($this->Global["submit"]);
	// 			$this->Project_model->addtreatment($this->Global);
	// 		}
	// 		$this->load->view('admin/add-treatment');
	// 	}
	// }

	// public function edittreatments($slug)
	// {
	// 	if (!isset($_SESSION['isAdminLoggedIn'])) {
	// 		redirect('admin/login');
	// 	} else {
	// 		if (isset($_POST['submit'])) {
	// 			$this->Global = $_POST;
	// 			if (!empty($_FILES['image']['name'])) {
	// 				$image = $this->upload('image', '');
	// 			    $this->Global['image'] = $image['file_name'];
	// 			}
	// 			unset($this->Global["submit"]);
	// 			$this->Project_model->edittreatment($slug,$this->Global);
	// 		}
	// 		$treatment = $this->Project_model->gettreatments('id', $slug);
	// 		$this->Global['treatment'] = $treatment[0];
	// 		$this->load->view('admin/edit-treatment', $this->Global);
	// 	}
	// }

	// public function removetreatments($link = NULL)
	// {
	// 	if (!isset($_SESSION['isAdminLoggedIn'])) {
	// 		redirect('admin/login');
	// 	} else {
	// 		$this->load->model('Project_model');
	// 		$this->Project_model->removeimg('treatments', $link);
	// 		echo ("done");
	// 	}
	// }

	public function editisettings()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			if (isset($_POST['submit'])) {
				$name = $_POST['name'];
				$image = $this->upload('value', '');
				$value = $image['file_name'];
				$this->Global_model->editsettings($name, $value);
			}
			$this->session->set_flashdata('settings_saved', 'Settings Saved Successfully');
			redirect('admin/globalsettings');
		}
	}

	public function removesettingsdata($link = NULL)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$this->Global_model->removesettingsdata($link);
			echo ("done");
		}
	}

	public function enquiry()
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$query = $this->db->query("Select * from enquiry order by id desc");
			$data['contacts'] = $query->result_array();
			$this->load->view('admin/enquiry', $data);
		}
	}
	public function enquirydetails($req)
	{
		if (!isset($_SESSION['isAdminLoggedIn'])) {
			redirect('admin/login');
		} else {
			$query = $this->db->query("Select * from enquiry where id='$req'");
			$data['message'] = $query->row_array();
			$this->load->view('admin/enquiry-details', $data);
		}
	}



}