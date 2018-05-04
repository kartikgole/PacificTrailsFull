<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


  <br>
  <h2>Reservations at Pacific Trails</h2>
  <br>
  <p><span class="boldtext">My Reservation</span></p>
  <form name="form2" method="post" action="<?php echo site_url('home/onsubmitmyreservations'); ?>">

    <table class="formtable1">
      <p id="msg"> <?php 
      echo "";

      ?></p>
      <tr>
        <td><?php echo form_label('*Email:'); ?></td>
      <td> <?php echo form_input(array('type' => 'email', 'name' => 'email', 'required'=>'required')); ?></td>
      </tr>
      <tr>
        <td><?php echo form_label('First Name:'); ?></td>
        <td><?php echo form_input(array('type' => 'text', 'name' => 'fname')); ?></td>
      </tr>
      <tr>
        <td><?php echo form_label('Last Name:'); ?></td>
        <td><?php echo form_input(array('type' => 'text', 'name' => 'lname')); ?></td>
      </tr>
      <tr>
        <td><?php echo form_label('Phone:'); ?></td>
        <td><?php echo form_input(array('type' => 'text', 'name' => 'phone','pattern'=>'[0-9]{10}')); ?></td>
      </tr>
      <tr>
        <td><?php echo form_label('Arrival Date:'); ?></td>
        <td><?php echo form_input(array('type' => 'text', 'name' => 'arrival_date','placeholder'=>'mm/dd/yyyy','pattern'=>'^(0[1-9]|1[012])[/](0[1-9]|[12][0-9]|3[01])[/](19|20)\d\d$')); ?></td>
      </tr>
      <tr>
        <td><?php echo form_label('Departure Date:'); ?></td>
        <td><?php echo form_input(array('type' => 'text', 'name' => 'departuredate','placeholder'=>'mm/dd/yyyy','pattern'=>'^(0[1-9]|1[012])[/](0[1-9]|[12][0-9]|3[01])[/](19|20)\d\d$')); ?></td>
      </tr>
      <tr>
        <td><?php echo form_label('Activities:'); ?></td>
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
  <td><?php echo form_input(array('type' => 'text', 'name' => 'date','placeholder'=>'mm/dd/yyyy','pattern'=>'^(0[1-9]|1[012])[/](0[1-9]|[12][0-9]|3[01])[/](19|20)\d\d$')); ?></td>
</tr>

<tr>
  <td>
  </td>
  <td>
   <?php echo form_submit(array('type' => 'submit', 'value' => 'Submit','name'=>'myreservations')); ?></td><br><br>
   
 </tr>
</table>

<?php echo form_close(); ?>
