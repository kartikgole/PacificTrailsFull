<main>
   <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

  
  <h2>Shop at Pacific Trails</h2>
  <br>
 
  <table class="shoptable">
    <tr>
      <td>
        <a><img src="<?php echo base_url(); ?>images/trailguide.jpg" class="shopimage"></a>
      </td>
      <td class="shopdesc"><p><span class="boldtext">Pacific Trails Hiking Guide</span></p>
        <p>Guides hikes to the best trails around Pacific Trails Resort. Each hike includes a detailed route,
          distance , elevation change, and estimated time. 187 pages, Softcover. $19.95
        </p>
        
        <form method="post" action="http://ww9.aitsafe.com/cf/add.cfm?userid=B9195222&product=Hiking+Guide&price=19.95">

          <input type="hidden" name="desc1" id="desc1" value="Hiking Guide">
          <input type="hidden" name="cost1" id="cost1" value="19.95">
          <p><input type="submit" value="Add to Cart" name="cart1"></p>
        </form>
        

      </td>
    </tr>

    <tr>
      <td><a><img src="<?php echo base_url(); ?>images/yurtyoga.jpg" class="shopimage"></a> </td>
      <td class="shopdesc"><p><span class="boldtext">Yurt Yoga</span></p>
       <p> Enjoy the restorative poses for yurt yoga in the comfort of your own home. Each pose is illutrated with 
        several photographs, an explanation, and a description of restorative benefits. 206 pages. Softcover. $24.95
      </p>
      <form method="post" action="http://ww9.aitsafe.com/cf/add.cfm?userid=B9195222&product=Yurt+Yoga&price=24.95">
        <input type="hidden" name="desc2" id="desc2" value="Yurt Yoga">
        <input type="hidden" name="cost2" id="cost2" value="24.95">
        <p><input type="submit" value="Add to Cart" name="cart2"></p>
      </form>



    </td>
    
  </tr>


</table>

</main>