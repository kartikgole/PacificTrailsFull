<main>
  <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$fname="";
$lname="";
$email="";
$phone="";
$arrival_date="";
$noofnights="";
$comments="";
$when="";



?>

  <br>
  <h2>Reservations at Pacific Trails</h2>
  
  
  
  
  <p><span class="boldtext">Contact Us</span></p>
  <p>Required information is marked with an asterisk(*).</p>

  <?php echo form_open('home/onsubmitreservations'); ?>

  <table class="formtable1">
    <tr>
      <td id="lefttd"><?php echo form_label('*First Name:'); ?></td>
      <td> <?php echo form_input(array('type' => 'text', 'name' => 'fname', 'value' => $fname, 'required'=>'required')); ?>
        
      </td>
    </tr>
    <tr>
      <td><?php echo form_label('*Last Name:'); ?></td>
      <td> <?php echo form_input(array('type' => 'text', 'name' => 'lname', 'value' => $lname, 'required'=>'required')); ?>
      </td>
    </tr>
    <tr>
      <td><?php echo form_label('*Email:'); ?></td>
      <td> <?php echo form_input(array('type' => 'email', 'name' => 'email', 'value' => $email, 'required'=>'required')); ?></td>
    </tr>
    <tr>
      <td><?php echo form_label('Phone:'); ?></td>
      <td><?php echo form_input(array('type' => 'text', 'name' => 'phone', 'value' => $phone, 'pattern'=>'[0-9]{10}')); ?></td>
    </tr>
    <tr>
      <td><?php echo form_label('Arrival Date:'); ?></td>
      <td><?php echo form_input(array('type' => 'text', 'name' => 'arrival_date','placeholder'=>'mm/dd/yyyy',  'value' => $arrival_date, 'pattern'=>'^(0[1-9]|1[012])[/](0[1-9]|[12][0-9]|3[01])[/](19|20)\d\d$')); ?>
      </td>
    </tr>
    <tr>
      <td><?php echo form_label('Nights:'); ?></td>
      <td><?php echo form_input(array('type' => 'number', 'name' => 'noofnights', 'value' => $noofnights,'min'=>'0')); ?>
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
        <td><?php    echo form_textarea($data_comments);    ?></td>
      </tr>
      <tr>
        <td><?php echo form_label('*Activities:'); ?></td>
        <td>
          <select name="activities" class="activitiesdropdown">
            <?php foreach($activity as $row):
            ?>
            <option value="<?php echo $row['description'];?>" ><?php echo $row['summary'];?></option>
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
          <option value="<?php echo $row['description'];?>" ><?php echo $row['name'];?></option>
        <?php endforeach;?>
      </select>
    </td>
  </tr>
  <tr>
    <td><?php echo form_label('When:'); ?></td>
    <td><?php echo form_input(array('type' => 'text', 'name' => 'date', 'value' => $when,'placeholder'=>'mm/dd/yyyy','pattern'=>'^(0[1-9]|1[012])[/](0[1-9]|[12][0-9]|3[01])[/](19|20)\d\d$')); ?>
    </td>
  </tr>

  <tr>
    <td>
    </td>
    <td>
     <?php echo form_submit(array('type' => 'submit', 'value' => 'Submit','name'=>'reservation', 'onClick="validate()"')); ?></td>
   </td>
 </tr>
</table>
<?php echo form_close(); ?>
</main>