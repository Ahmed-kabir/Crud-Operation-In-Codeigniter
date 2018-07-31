<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminModel extends CI_Model {
    
    public function adminInfo($email,$password){
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $result=$this->db->get();
        $final_result=$result->row();
        return $final_result;
    }
    public function saveData(){
        $data=array();
        $data['student_name']=$this->input->post('student_name',true);
        $data['student_roll']=$this->input->post('student_roll',true);
        $data['student_phone']=$this->input->post('student_phone',true);
        $this->db->insert('tbl_student',$data);
    }
    public function showdata(){
        $this->db->select('*');
        $this->db->from('tbl_student');
        $query_result=$this->db->get();
        $all_data=$query_result->result();
        return $all_data;
        
    }
    public function InfoById($id){
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->where('id',$id);
        $query_result=$this->db->get();
        $all_data=$query_result->row();
        return $all_data;
    }
    public function updateInfo(){
        $data=array();
        $studentID=$this->input->post('Id',true);
        $data['student_name']=$this->input->post('student_name',true);
        $data['student_roll']=$this->input->post('student_roll',true);
        $data['student_phone']=$this->input->post('student_phone',true);
        $this->db->where('Id',$studentID);
        $this->db->update('tbl_student',$data);
    
    }
    public function deleteById($id){
        $this->db->where('Id',$id);
        $this->db->delete('tbl_student');
    }
}