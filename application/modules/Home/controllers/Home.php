<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Home_Model');		
	}
	
	public function index()
	{			
		$this->load->view('index');
	}

    public function header()
	{
		$this->load->view('header');
	}

    public function footer()
	{
		$this->load->view('footer');
	}

	public function sidebar()
	{
		$this->load->view('sidebar');
	}

	public function b2c_userlist()
	{
		$data['b2cusers']=$this->Home_Model->get_b2c_userlist();	
		$this->load->view('b2c_userlist',$data);
	}
	
	public function b2b_userlist()
	{
		$data['b2busers']=$this->Home_Model->get_b2b_userlist();	
		$this->load->view('b2b_userlist',$data);
	}
	public function creat_b2c()
	{
		$this->load->view('creat_b2c');
	}
	public function creat_b2b()
	{
		$this->load->view('creat_b2b');
	}
	public function insertb2c()
	{
		
		// echo "<pre>";
		// print_r ($_POST);
		// echo "</pre>";

		$password= $this->input->post('password');
		$name= $this->input->post('name');
		$mobile= $this->input->post('mobile');
		$city= $this->input->post('city');

		$insertdata = array(
			'username'=>$name,
			'password'=>$password,
			'mobile'=>$mobile,
			'city'=>$city,
		);
		$this->Home_Model->insertb2c($insertdata);
		
		
		$this->session->set_flashdata('status', 'success');
		$this->session->set_flashdata('msg', 'B2C User Data Successfully Inserted');
		redirect(base_url('home/b2c_userlist'),'refresh');
		
	}

	public function insertb2b()

	{
		
		// echo "<pre>";
		// print_r ($_POST);
		// echo "</pre>";

		$password= $this->input->post('password');
		$name= $this->input->post('name');
		$mobile= $this->input->post('mobile');
		$city= $this->input->post('city');

		$insertdata = array(
			'username'=>$name,
			'password'=>$password,
			'mobile'=>$mobile,
			'city'=>$city,
		);
		$this->Home_Model->insertb2b($insertdata);
		
		
		$this->session->set_flashdata('status_b2b', 'success');
		$this->session->set_flashdata('msg', 'B2B User Data Successfully Inserted');
		redirect(base_url('home/b2b_userlist'),'refresh');
	
}

public function editb2c($id)
{
$data['b2c']=$this->Home_Model->geteditb2c($id);

$this->load->view('edit_b2c', $data);


}

public function updateb2c()
{
		 $password= $this->input->post('password');
		$name= $this->input->post('name');
		$mobile= $this->input->post('mobile');
		$city= $this->input->post('city');
		$id= $this->input->post('id');

		$insertdata = array(
			'username'=>$name,
			'password'=>$password,
			'mobile'=>$mobile,
			'city'=>$city,
		);
		$this->Home_Model->updateb2c($insertdata, $id);
		// echo $this->db->last_query();die;
		

		$this->session->set_flashdata('status_b2c', 'success');
		$this->session->set_flashdata('msg', 'B2C User Data Successfully Updated');
		redirect(base_url('home/b2c_userlist'),'refresh');
}

public function editb2b($id)
{
$data['b2b']=$this->Home_Model->geteditb2b($id);

$this->load->view('edit_b2b', $data);


}

public function updateb2b()
{
	    $password= $this->input->post('password');
		$name= $this->input->post('name');
		$mobile= $this->input->post('mobile');
		$city= $this->input->post('city');
		$id= $this->input->post('id');

		$insertdata = array(
			'username'=>$name,
			'password'=>$password,
			'mobile'=>$mobile,
			'city'=>$city,
		);
		$this->Home_Model->updateb2b($insertdata, $id);

		$this->session->set_flashdata('status', 'success');
		$this->session->set_flashdata('msg', 'B2B User Data Successfully Updated');
		redirect(base_url('home/b2b_userlist'),'refresh');
}
public function adpost()
	{
		$data['adposts']=$this->Home_Model->get_adpost();	
		$this->load->view('adpost',$data);
	}

}
