<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
        public function home(){
            //echo 'welcome';
            $data=array();
            $data['kabir']=$this->load->view('admin/mainContent','',true);
            $this->load->view('admin/dashboard',$data);
        }
        public function addStudent(){
            $data=array();
            $data['kabir']=$this->load->view('student/addStudent','',true);
            $this->load->view('admin/dashboard',$data);
            //echo 'add student';
        }
        
        public function login(){
            $email=$this->input->post('email',true);
            $password=$this->input->post('password',true);
            $this->load->model('adminModel');
            $final_result=$this->adminModel->adminInfo($email,$password);
            $sdata=array();
            if($final_result){
                $sdata['id']=$final_result->$id;
                $sdata['name']=$final_result->$name;
                $this->session->set_userdata('$sdata');
                return redirect('dashboard');
            }
            else{
                
            $sdata['message']='your user name or password is invalid';
            $this->session->set_userdata($sdata);
            return redirect (base_url());
            
            
        }
}
            public function logout(){
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('name');
            $sdata['message']='logout successfully';
            $this->session->set_userdata($sdata);
            return redirect(base_url());
            
}
            public function saveInfo(){
                $sdata=array();
                $this->adminModel->saveData();
                $sdata['message']='data saved succesfully';
                $this->session->set_userdata('$sdata');
                return redirect('add/student');
              //$this->load->view('student/manageStudent');
               }
            public function manageStudent(){
            $data=array();
            $data['allInfo']=$this->adminModel->showData();
            $data['kabir']=$this->load->view('student/manageStudent',$data,true);
            $this->load->view('admin/dashboard',$data);
        }
        public function editStudent($id){
            $data=array();
            $data['allInfoById']=$this->adminModel->InfoById($id);
            $data['kabir']=$this->load->view('student/editStudent',$data,true);
            $this->load->view('admin/dashboard',$data);
        }
        public function updateStudent(){
            $this->adminModel->updateInfo();
            $sdata['message']='data updated successfully';
            $this->session->set_userdata($sdata);
            return redirect('manage/student');
        }
        public function deleteStudent($id){
            $this->adminModel->deleteById($id);
            $sdata['message']='data deleted successfully';
            $this->session->set_userdata($sdata);
            return redirect('manage/student');
        }

}