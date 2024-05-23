<?php
class Global_model extends CI_Model
{

        public function getdata()
        {
                $this->load->database();
                $query = $this->db->query("Select * from global");
                $info = $query->result_array();
                foreach ($info as $row) {
                        $data[$row['name']] = $row['value'];
                }
                return $data;
        }
        public function getprojects($field = NULL, $value = NULL)
        {
                $this->load->database();
                if ($field != NULL && $value != NULL) {
                        $this->db->where('status', 1);
                        // $where = "name='Joe' AND status='boss' OR status='active'";
                        $this->db->where($field, $value);
                }
                $query = $this->db->get('project');
                return $query->result_array();
        }

        public function getslider()
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where location = 'slider'");
                return $query->result_array();
        }
        public function getactiveslider()
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where status = 1 and location = 'slider'");
                return $query->result_array();
        }
        public function getgalleryimage($link)
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where link = $link and location = 'gallery' ");
                return $query->result_array();
        }
        public function getgalleryvideo($link)
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where link = $link and location = 'vgallery' ");
                return $query->result_array();
        }
        public function getclientimage($link)
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where link = $link and location = 'clients' ");
                return $query->result_array();
        }
        public function getpage($link)
        {
                $this->load->database();
                $query = $this->db->query("Select * from pages where name=\"$link\"");
                return $query->result_array();
        }
        public function getgallery()
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where location = 'gallery'");
                return $query->result_array();
        }
        public function getvideogallery()
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where location = 'vgallery'");
                return $query->result_array();
        }
        public function getactivegallery()
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where status = 1 and location = 'gallery'");
                return $query->result_array();
        }
        public function getactivevideogallery()
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where status = 1 and location = 'vgallery'");
                return $query->result_array();
        }
        public function getclients()
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where location = 'clients'");
                return $query->result_array();
        }
        public function getprocess()
        {
                $this->load->database();
                $query = $this->db->query("Select * from clients");
                return $query->result_array();
        }
        public function getactiveprocess()
        {
                $this->load->database();
                $query = $this->db->query("Select * from clients where status = 1");
                return $query->result_array();
        }
        public function geteditprocess($value)
        {
                $this->load->database();
                $query = $this->db->query("Select * from clients where link = '$value'");
                return $query->result_array();
        }
        public function getactiveclients()
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where status = 1 and location = 'clients'");
                return $query->result_array();
        }
        
        public function getactivesliders()
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where status = 1 and location = 'slider'");
                return $query->result_array();
        }
        
        public function getactivereviews()
        {
                $this->load->database();
                $query = $this->db->query("Select * from reviews where status = 1");
                return $query->result_array();
        }

        public function getactiveplans()
        {
                $this->load->database();
                $query = $this->db->query("Select * from plans where status = 1");
                return $query->result_array();
        }
        public function getsliderimage($link)
        {
                $this->load->database();
                $query = $this->db->query("Select * from slider where link = $link and location = 'slider' ");
                return $query->result_array();
        }
        public function getplans($field =NULL , $value = NULL)
        {
                $this->load->database();
                if(isset($field) and isset($value)){
                     $query = $this->db->query("Select * from plans where $field = $value");
                }
                else{
                     $query = $this->db->query("Select * from plans");
                }
                return $query->result_array();
        }

        public function getservices($field =NULL , $value = NULL)
        {
                $this->load->database();
                if(isset($field) and isset($value)){
                        $query = $this->db->query("Select * from services where $field = '$value'");
                }
                else{
                        $query = $this->db->query("Select * from services");
                }
                return $query->result_array();
        }
        public function getoneservices($value = NULL)
        {
                $this->load->database();
                
                        $query = $this->db->query("Select * from services where status = 1 and link = '$value'");
                
                return $query->row_array();
        }
        public function getmainservices($field =NULL , $value = NULL)
        {
                $this->load->database();
                if(isset($field) and isset($value)){
                        $query = $this->db->query("Select * from services where $field = '$value' and status = 1 limit 7");
                }
                else{
                        $query = $this->db->query("Select * from services");
                }
                return $query->result_array();
        }


        public function getjobs($field =NULL , $value = NULL)
        {
                $this->load->database();
                if(isset($field) and isset($value)){
                        $query = $this->db->query("Select * from career where $field = $value");
                }
                else{
                        $query = $this->db->query("Select * from career");
                }
                return $query->result_array();
        }

        public function editsettings($name, $value)
        {
                $this->db->set('value', $value);
                $this->db->where('name', $name);
                $this->db->update('global');
        }


        public function addgallery($data)
        {
                $this->db->insert('slider', $data);
                redirect('admin/'.$data['location']);
        }
//video gallery
        public function addvideogallery($data)
        {
                $this->db->insert('slider', $data);
                redirect('admin/'.$data['location']);
        }

        public function editgallery($data)
        {
                $this->db->where('link', $data['link']);
                $this->db->update('slider', $data);
                return $data;
        }
        public function editvideogallery($data)
        {
                $this->db->where('link', $data['link']);
                $this->db->update('slider', $data);
                return $data;
        }
        public function addslider($data)
        {
                $this->db->insert('slider', $data);
                redirect('admin/sliders');
        }

        public function editpage($data)
        {
                $this->db->where('name', $data['name']);
                $this->db->update('pages', $data);
        }

        
        public function editslider($data)
        {
                $this->db->where('link', $data['link']);
                $this->db->update('slider', $data);
                return $data;
        }

        public function removeimg($table = NULL, $link = NULL)
        {
                $this->db->set('image', "");
                $this->db->where('link', $link);
                $this->db->update($table);
        }
        public function save($data = array())
        {
            $insert = $this->db->insert('appointment', $data);
        }
        public function send_mail($data)
        {
            $this->load->library('email');
            $config['protocol']    = 'smtp';
            $config['smtp_host']    = admin_host;
            $config['smtp_crypto'] = 'ssl';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = admin_username;
            $config['smtp_pass']    = admin_password;
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not    
            $this->email->initialize($config);
            $this->email->from(admin_username, admin_name);
            $this->email->to($data['toemail']);
            $this->email->subject('Enquiry from '.sitename);
            $mail_message = $data['message'];
            $this->email->message($mail_message);
            if (!$this->email->send()) {
                return $this->email->print_debugger();
            }
            else{
                    redirect('home/thanks');
            }
        }

        public function removesettingsdata($link = NULL)
        {
                $this->db->set('value', "");
                $this->db->where('name', $link);
                $this->db->update('global');
        }

        public function enquiry($data = array())
        {
            unset($data['submit']);
            $insert = $this->db->insert('enquiry', $data);
        }


}
