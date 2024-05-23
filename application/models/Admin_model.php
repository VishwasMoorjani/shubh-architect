<?php defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Admin_model extends CI_Model
{
    function __construct()
    {
        // Set table name 
        $this->table = 'admin';
    }

    /* 
     * Fetch user data from the database 
     * @param array filter data based on the passed parameters 
     */
    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from($this->table);

        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $val) {
                $this->db->where($key, $val);
            }
        }

        if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
            $result = $this->db->count_all_results();
        } else {
            if (array_key_exists("id", $params) || $params['returnType'] == 'single') {
                if (!empty($params['id'])) {
                    $this->db->where('id', $params['id']);
                }
                $query = $this->db->get();
                $result = $query->row_array();
            } else {
                $this->db->order_by('id', 'desc');
                if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                    $this->db->limit($params['limit'], $params['start']);
                } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                    $this->db->limit($params['limit']);
                }

                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
            }
        }

        // Return fetched data 
        return $result;
    }

    public function ForgotPassword($email)
    {
        $this->db->select('email');
        $this->db->from('admin');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function sendpassword($data)
    {
        $email = $data['email'];
        $query1 = $this->db->query("SELECT *  from admin where email = '" . $email . "' ");
        $row = $query1->result_array();
        if ($query1->num_rows() > 0) {
            $passwordplain = "";
            $passwordplain  = rand(999999999, 9999999999);
            $newpass['password'] = sha1($passwordplain);
            $this->db->where('email', $email);
            $this->db->update('admin', $newpass);
            $mail_message = 'Dear ' . $row[0]['name'] . ',' . "\r\n";
            $mail_message .= 'Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>' . $passwordplain . '</b>' . "\r\n";
            $mail_message .= '<br>Please Update your password.';
            $mail_message .= '<br>Thanks & Regards';
            $mail_message .= '<br>Your company name';
            require_once('class.phpmailer.php');	
            $mail = new PHPMailer();
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "host.gdigitalindia.in";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "enquiry@sanjeevanifoundation.co.in";
            $mail->Password = "Dz&j.M*XXA)x";
            $mail->setFrom('vishwasmoorjani02@gmail.com', 'Vishwas');
            $mail->IsHTML(true);
            $mail->addAddress('vishwasmoorjani02@gmail.com');
            $mail->Subject = 'OTP from Route';
            $mail->Body    = $mail_message;
            if (!$mail->Send()) {
                $this->session->set_flashdata('error_msg', 'Failed to send password, please try again!');
            } else {
                $this->session->set_flashdata('success_msg', 'Password sent to your email!');
            }
            redirect(base_url() . 'admin/login', 'refresh');
        } else {
            $this->session->set_flashdata('error_msg', 'Email not found try again!');
            redirect(base_url() . 'admin/login', 'refresh');
        }
    }

    public function getprojects(){
        $this->load->database();
        $query = $this->db->get('project');
        return $query->result_array();
    }

    public function addproject($data){
        $this->db->insert('project', $data);
        redirect('admin/projects');
    }
    public function editproject($data){  
        $this->db->where('link', $data['link']);
        $this->db->update('project', $data);
        redirect('admin/projects');
    }

    public function addplan($data){
        $this->db->insert('plans', $data);
        redirect('admin/plans');
    }
    public function editplan($data){  
        $this->db->where('id', $data['id']);
        $this->db->update('plans', $data);
        redirect('admin/plans');
    }
    
    public function addservice($data){
        $this->db->insert('services', $data);
        redirect('admin/services');
    }

    public function addprocess($data){
        $this->db->insert('clients', $data);
        redirect('admin/process');
    }

    
    public function editservice($data){  
        $this->db->where('id', $data['id']);
        $this->db->update('services', $data);
        redirect('admin/services');
    }

    public function editprocess($data){  
        $this->db->where('link', $data['link']);
        $this->db->update('clients', $data);
        redirect('admin/process');
    }

    public function addjob($data){
        $this->db->insert('career', $data);
        redirect('admin/jobs');
    }

    public function editjob($data){  
        $this->db->where('id', $data['id']);
        $this->db->update('career', $data);
        redirect('admin/jobs');
    }

    public function addcategory($data){
        $this->db->insert('category', $data);
        if($data['parent']!= ""){
            redirect('admin/subcategories');
        }
        else{
             redirect('admin/categories');
        }
    }

    public function editcategory($data){  
        $this->db->where('link', $data['link']);
        $this->db->update('category', $data);
        return 1;
    }
}
