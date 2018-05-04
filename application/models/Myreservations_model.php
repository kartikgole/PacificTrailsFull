<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_record()
    {

            
            $query = $this->db->query("SELECT C.email,C.fname,C.lname,C.phone,R.arrivalDate,A.description as Adescription,P.description as Pdescription,W.date FROM whenres W, activity A, package P,client C,reservationyurt R WHERE C.email='".$_POST['email']."' and P.packageid=R.packageid and R.resid=C.resid and A.activityid=C.activityid and A.activityid=W.activityid and C.clientid=W.clientid");
            if($query->num_rows()>0)
            {
             $value = $query->row();
             $data['email']=$value->email;
             $data['fname']=$value->fname;
               $data['lname']=$value->lname;
                $data['phone']=$value->phone;
                $christmas = $value->arrivalDate;
               $parts = explode('-',$christmas);
               $adate = $parts[1] . '/' . $parts[2] . '/' . $parts[0];
                $data['arrivalDate']=$adate;
                 $data['arrivalDate']=$value->arrivalDate;
                  $data['Adescription']=$value->Adescription;
                   $data['Pdescription']=$value->Pdescription;
                   $christmas = $value->date;
                    $parts = explode('-',$christmas);
                   $wdate = $parts[1] . '/' . $parts[2] . '/' . $parts[0];
                    $data['date']=$wdate;
                    $pdescription=$data['Pdescription'];
                     $adescription=$data['Adescription'];
                    $query = $this->db->query("SELECT packageid FROM package WHERE description='$pdescription'");
                     $row = $query->row_array();
      $data['packageid']=$row['packageid'];
      $query = $this->db->query("SELECT activityid FROM activity WHERE description='$adescription'");
      $row = $query->row_array();
      $data['activityid']=$row['activityid'];

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
      
            $data['activityid']="";

          $data['msg']="No reservations found";


            }
            return $data;
}
}
