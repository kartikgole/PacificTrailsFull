<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$arrival_date=$_POST['arrival_date'];
$noofnights=$_POST['noofnights'];
$comments=$_POST['comments'];
$when=$_POST['date'];
$activities=$_POST['activities'];
$packages=$_POST['packages'];
?>
<div class="rightcol">
  <br>
  <h2>Reservations at Pacific Trails</h2>
  
  
  
  <p><span class="boldtext">Contact Us</span></p>
  <br>   
  <p>Required information is marked with an asterisk(*).</p>

  <?php echo form_open('home/onsubmitreservations'); ?>

  <table class="formtable">
    <tr>
      <td id="lefttd"><?php echo form_label('*First Name:'); ?></td>
      <td><?php echo form_input(array('type' => 'text', 'name' => 'fname', 'value' => $fname, 'required'=>'required')); ?>
        <span id="msg"><?php echo form_error('fname'); ?></span>
        
      </td>
    </tr>
    <tr>
      <td><?php echo form_label('*Last Name:'); ?></td>
      <td><?php echo form_input(array('type' => 'text', 'name' => 'lname', 'value' => $lname, 'required'=>'required')); ?>
        <span id="msg"><?php echo form_error('lname'); ?>
        </span> </td>
      </tr>
      <tr>
        <td><?php echo form_label('*Email:'); ?></td>
        <td><?php echo form_input(array('type' => 'email', 'name' => 'email', 'value' => $email, 'required'=>'required')); ?><span id="msg"><?php echo form_error('email'); ?></span></td>
      </tr>
      <tr>
        <td><?php echo form_label('Phone:'); ?></td>
        <td><?php echo form_input(array('type' => 'text', 'name' => 'phone', 'value' => $phone, 'pattern'=>'[0-9]{10}')); ?>
          <span id="msg"><?php echo form_error('phone'); ?></span></td>
        </tr>
        <tr>
          <td><?php echo form_label('Arrival Date:'); ?></td>
          <td><?php echo form_input(array('type' => 'text', 'name' => 'arrival_date','placeholder'=>'mm/dd/yyyy',  'value' => $arrival_date, 'pattern'=>'^(0[1-9]|1[012])[/](0[1-9]|[12][0-9]|3[01])[/](19|20)\d\d$')); ?>
            <span id="msg"><?php echo form_error('arrival_date'); ?></span>
          </td>
        </tr>
        <tr>
          <td><?php echo form_label('Nights:'); ?></td>
          <td> <?php echo form_input(array('type' => 'number', 'name' => 'noofnights', 'value' => $noofnights,'min'=>'0')); ?>
          </td>
        </tr>
        <tr>
         <?php $data_comments = array(
          'name'        => 'comments',
          'value'       => $comments,
          'rows'        => '2',
          'cols'        => '22',
          'required'=>'required',
          );   ?>
          <td><?php echo form_label('*Comments:'); ?></td>
          <td><?php    echo form_textarea($data_comments);    ?>
            <span id="msg"><?php echo form_error('comments'); ?></span></td>

          </tr>
          <tr>
            <td><?php echo form_label('*Activities:'); ?></td>
            <td>
              <select name="activities" class="activitiesdropdown">
                <?php foreach($activity as $row):
                ?>
                <option value="<?php echo $row['description'];?>" selected="<?php if($activities==$row['summary']) echo "selected"; ?>"><?php echo $row['summary'];?></option>
              <?php endforeach;?>
            </select>

          </td>
        </tr>
        <tr>
          <td><?php echo form_label('Packages:'); ?></td>
          <td>
            <select name="packages" class="activitiesdropdown">
              <?php foreach($package as $row):
              ?>
              <option value="<?php echo $row['description'];?>" selected="<?php if($packages==$row['name']) echo "selected"; ?>"><?php echo $row['name'];?></option>
            <?php endforeach;?>
          </select>
        </td>
      </tr>
      <tr>
        <td><?php echo form_label('When:'); ?></td>
        <td> <?php echo form_input(array('type' => 'text', 'name' => 'date', 'value' => $when,'placeholder'=>'mm/dd/yyyy','pattern'=>'^(0[1-9]|1[012])[/](0[1-9]|[12][0-9]|3[01])[/](19|20)\d\d$')); ?>
          <span id="msg"><?php echo form_error('date'); ?></span>
        </td>
      </tr>

      <tr>
        <td>
        </td>
        <td>

         <?php echo form_submit(array('type' => 'submit', 'value' => 'Submit','name'=>'reservation')); ?></td><br><br>
       </td>
     </tr>
   </table>
   <?php echo form_close(); ?>
