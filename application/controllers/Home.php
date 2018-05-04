<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    
        //load model
    $this->load->model('home_model');
         // load form and url helpers
    $this->load->helper(array('form', 'url'));

        // load form_validation library
    $this->load->library('form_validation');
    $this->load->helper('security');
    $this->load->helper('form');
  }
  public function index()
  {
   $this->load->helper('url');
   $this->load->view('VTop');
   $this->load->view('VHome');
   $this->load->view('VBottom'); 

   
 }
 public function yurts()
 {
   $this->load->helper('url');
   $this->load->view('VTop');
   $data['package'] = $this->home_model->get_package();
   $this->load->view('VYurts', $data);
   $this->load->view('VBottom'); 

   
 }
 public function activities()
 {
   $this->load->helper('url');
   $this->load->view('VTop');
   $this->load->view('VActivities');
   $this->load->view('VBottom'); 

 }
 public function reservations()
 {
   $this->data['package'] = $this->home_model->get_packages();
   $this->data['activity'] = $this->home_model->get_activities();
   $this->load->helper('url');
   //$this->load->view('reservations');
   $this->load->view('VTop');
   $this->data = $this->security->xss_clean($this->data);
   $this->load->view('VReservations',$this->data);
   $this->load->view('VBottom'); 

 }
 public function onsubmitreservations()
 {
   $this->form_validation->set_rules('fname', 'First Name', 'required|alpha');
   $this->form_validation->set_rules('lname', 'Last Name', 'required|alpha');
   $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
   $this->form_validation->set_rules('phone', 'Phone', 'regex_match[/^[0-9]{10}$/]');
   $this->form_validation->set_rules('arrival_date', 'Arrival Date', array('regex_match[/^((0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d)$/]'));
   $this->form_validation->set_rules('date', 'When Date', array('regex_match[/^((0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d)$/]'));
   $this->form_validation->set_rules('comments', 'Comments', 'required');
   if ($this->form_validation->run() == FALSE)
   {
     $this->load->helper('url');
     $this->data['package'] = $this->home_model->get_packages();
     $this->data['activity'] = $this->home_model->get_activities();
     $this->load->view('reservations');
     $this->load->view('VTop');
     $this->data = $this->security->xss_clean($this->data);
     $this->load->view('VReservationError',$this->data);
     $this->load->view('VBottom'); 
   }
   else
   {
     
     $this->data = $this->home_model->put_record($_POST);
     $this->data['package'] = $this->home_model->get_packages();
     $this->data['activity'] = $this->home_model->get_activities();
     $this->data = $this->security->xss_clean($this->data);
     $this->load->helper('url');
     $this->load->view('reservations');
     $this->load->view('VTop');
     $this->load->view('VReservations',$this->data);
     $this->load->view('VBottom');
   }

 }


 public function myreservations()
 {   

   $this->load->helper('url');
   $this->data['package'] = $this->home_model->get_packages();
   $this->data['activity'] = $this->home_model->get_activities();
   $this->data = $this->security->xss_clean($this->data);
   $this->load->view('MyReservationSession');
   $this->load->view('VTop');
   $this->load->view('VMyResView',$this->data);

   $this->load->view('VBottom'); 

 }
 public function onsubmitmyreservations()
 {
  $this->form_validation->set_rules('email', 'Email Field', 'required|valid_email');
  if ($this->form_validation->run() == FALSE)
  {
    $data['emailmsg']="Email is required";
    $this->load->helper('url');
    $this->data['package'] = $this->home_model->get_packages();
    $this->data['activity'] = $this->home_model->get_activities();
    $this->data = $this->security->xss_clean($this->data);
    $this->load->view('MyReservationSession');
    $this->load->view('VTop');
    $this->load->view('VMyReservationError',$this->data);
    $this->load->view('VBottom');
  }
  else
  {
   $this->data = $this->home_model->get_record($_POST);
   $this->data['package'] = $this->home_model->get_packages();
   $this->data['activity'] = $this->home_model->get_activities();
   $this->data = $this->security->xss_clean($this->data);
   $this->load->view('MyReservationSession');
   $this->load->view('VTop');
   $this->load->view('VMyResView', $this->data);
   $this->load->view('VBottom');

 }

}

public function shop()
{
 $this->load->helper('url');
 $this->load->view('MyReservationSession');
 $this->load->view('VTop');
 $this->load->view('VShop');
 $this->load->view('VBottom'); 

}





}