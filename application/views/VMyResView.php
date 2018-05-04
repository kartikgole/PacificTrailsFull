<main>
	

	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


  <br>
  <h2>Reservations at Pacific Trails</h2>
  
  <p><span class="boldtext">My Reservation</span></p>
  <form name="form2" method="post" action="<?php echo site_url('home/myreservations'); ?>" onsubmit="validateemail()">

    <table class="formtable1">
      <p id="msg"> <?php 
      echo $_SESSION['resmsg'];
      ?></p>
      <tr>
        <td id="lefttd">*Email:</td>
        <td class="righttd"><input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" required='required'/><span id="msg"><?php echo $_SESSION['emailerr'];?></span></td>
      </tr>
      <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname" value="<?php echo $_SESSION['fname']; ?>" /></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname" value="<?php echo $_SESSION['lname'];  ?>"/></td>
      </tr>
      <tr>
        <td>Phone:</td>
        <td><input type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>" /></td>
      </tr>
      <tr>
        <td>Arrival Date:</td>
        <td><input type="text" name="arrival_date" value="<?php echo $_SESSION['arrivalDate'];  ?>" placeholder="mm/dd/yyyy" /><span id="msg"><?php echo $_SESSION['arrival_dateerr'];?></span></td>
      </tr>
      <tr>
        <td>Departure Date:</td>
        <td><input type="text" name="departuredate" value="<?php echo "26/10/2018" ?>" placeholder="mm/dd/yyyy" /></td>
      </tr>
      <tr>
        <td>Activities:</td>
        <td>
          
          <select name="activities" class="activitiesdropdown">
           <option value="hiking" <?php if($_SESSION['activityid']==1) echo "selected";     ?>>Hiking</option>
           <option value="kayaking" <?php if($_SESSION['activityid']==2) echo "selected";     ?>>Kayaking</option>
           <option value="birdwatching" <?php if($_SESSION['activityid']==3) echo "selected";     ?>>Bird Watching</option>
         </select>
       </td>
     </tr>
     <tr>
      <td>Packages:</td>
      <td>
       <select name="packages" class="activitiesdropdown">
         <option value="weekendescape"  <?php if($_SESSION['packageid']==1) echo "selected";     ?>>Weekend Escape</option>
         <option value="zenretreat"  <?php if($_SESSION['packageid']==2) echo "selected";     ?>>Zen Retreat</option>
         <option value="kayakaway"  <?php if($_SESSION['packageid']==3) echo "selected";     ?>>Kayak Away</option>
       </select>
     </td>
   </tr>
   <tr>
    <td>When:</td>
    <td><input type="text" name="date" value="<?php echo $_SESSION['date'];  ?>" placeholder="mm/dd/yyyy" /></td>
  </tr>

  <tr>
    <td>
    </td>
    <td>
      <input type="submit" name="myreservations" value="Submit" ></td><br><br>
      
    </tr>
  </table>
</form>
</main>