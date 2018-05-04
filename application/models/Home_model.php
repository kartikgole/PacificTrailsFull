<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }
  
  public function get_package()
  {
    $query = $this->db->get('package');
    if($query->num_rows() > 0){
      $result = $query->result_array();
      return $result;
    }else{
      return false;
    }
  }
  public function get_record()
  {

    
    $query = $this->db->query("SELECT C.email,C.fname,C.lname,C.phone,R.arrivalDate,A.description as Adescription,P.description as Pdescription,W.date,R.noofnights FROM whenres W, activity A, package P,client C,reservationyurt R WHERE C.email='".$_POST['email']."' and P.packageid=R.packageid and R.resid=C.resid and A.activityid=C.activityid and A.activityid=W.activityid and C.clientid=W.clientid");
    if($query->num_rows()>0)
    {
     $value = $query->row();
     $data['email']=$value->email;
     $data['fname']=$value->fname;
     $data['noofnights']=$value->noofnights;
     $noofnights=$value->noofnights;
     $data['lname']=$value->lname;
     $data['phone']=$value->phone;
     $christmas = $value->arrivalDate;
     $parts = explode('-',$christmas);
     $adate = $parts[1] . '/' . $parts[2] . '/' . $parts[0];
     $data['arrivalDate']=$adate;
     $depdate = date('Y-m-d', strtotime($christmas. ' + '. $noofnights .' days'));


     $parts = explode('-',$depdate);
     $depdate = $parts[1] . '/' . $parts[2] . '/' . $parts[0];
     $data['depdate']=$depdate;






     

     $data['Adescription']=$value->Adescription;
     $data['Pdescription']=$value->Pdescription;
     $christmas = $value->date;
     $parts = explode('-',$christmas);
     $wdate = $parts[1] . '/' . $parts[2] . '/' . $parts[0];
     $data['date']=$wdate;
     $pdescription=$data['Pdescription'];
     $adescription=$data['Adescription'];
     $query = $this->db->query("SELECT description FROM package WHERE description='$pdescription'");
     $row = $query->row_array();
     $data['packagedescription']=$row['description'];
     $query = $this->db->query("SELECT description FROM activity WHERE description='$adescription'");
     $row = $query->row_array();
     $data['activitydescription']=$row['description'];

     $data['msg']="";

   }   
   else
   {
    $data['email']="";
    $data['fname']="";
    $data['lname']="";
    $data['phone']="";
    $data['arrivalDate']="";
    $data['arrivalDate']="";
    $data['Adescription']="";
    $data['Pdescription']="";
    
    $data['date']="";
    
    $data['packageid']="";
    $data['depdate']="";
    
    $data['activityid']="";

    $data['msg']="No reservations found";


  }
  return $data;
}
public function put_record()
{

  $adescription=$_POST['activities'];
  $query = $this->db->query("SELECT activityid FROM activity WHERE description='$adescription'");
  $row = $query->row_array();
  $activityid=$row['activityid'];
  $pdescription=$_POST['packages'];
  $query = $this->db->query("SELECT packageid FROM package WHERE description='$pdescription'");
  $row = $query->row_array();
  $packageid=$row['packageid'];
  $christmas = $_POST['arrival_date'];
  $parts = explode('/',$christmas);
  $adate = $parts[2] . '-' . $parts[0] . '-' . $parts[1];
  $noofnights=$_POST['noofnights'];
  $query = $this->db->query("INSERT INTO reservationyurt (arrivalDate, noofnights, packageid) VALUES('$adate','$noofnights','$packageid')");
  $resid=$this->db->insert_id();
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $query = $this->db->query("INSERT INTO client (fname, lname, phone, email, resid, activityid) VALUES('$fname','$lname','$phone','$email','$resid','$activityid')");
  $clientid=$this->db->insert_id();
  if (empty($_POST['date']))
  {}
else
{ 
  $christmas = $_POST['date'];
  $parts = explode('/',$christmas);
  $wdate = $parts[2] . '-' . $parts[0] . '-' . $parts[1];
  $query = $this->db->query("INSERT INTO whenres (date, activityid, clientid) VALUES('$wdate','$activityid','$clientid')");

}

$data['msg'] = 'Your reservation is successfull. Your reservation id is : ';
$data['msgid']   = $resid;

return $data;
}

public function get_activities()
{
  $query = $this->db->query("SELECT summary,description FROM activity");
  if($query->num_rows() > 0){
    $result = $query->result_array();
    return $result;
  }else{
    return false;
  }
}

public function get_packages()
{
  $query = $this->db->query('SELECT description,name FROM package');
  if($query->num_rows() > 0){
    $result = $query->result_array();
    return $result;
  }else{
    return false;
  }
}




}