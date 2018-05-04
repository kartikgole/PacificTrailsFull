<div id ="yurtsimg"></div>
<main>

<h2>
The Yurts at Pacific Trails
</h2>


<dl>

<dt><strong>What is a yurt?</strong></dt>
<dd>Our luxury yurts are permanent structures four feet off the ground. Each yurt has canvas walls, a wooden floor, and a roof dome that be opened.</dd>


<dt><strong>How are the yurts furnished?</strong></dt>
<dd>Each yurt is furnished with a queen-size bed with down quilt and gas-fired stove. The luxury camping experience also includes electricity and a sink with hot and cold running water. Shower and restroom facilities are located in the lodge.</dd>


<dt><strong>What should I bring?</strong></dt>
<dd>Bring a sense of adventure and some time to relax. Most guests also pack comfortable walking shoes and plan to dress for changing weather with layers and clothing.</dd>



<dt><strong>Yurt Packages</strong></dt>

<dd>A variety of luxury yurt packages are available.   Choose a package below and contact us to begin
   your reservation. We're happy to build a custom
   package just for you.
</dd>
</dl>
<table class="table1">

				<tr>
					<th>Package Name</th>
					<th>Descriptions</th>
					<th>Nights</th>
					<th>Cost Per Person</th>
				</tr>
				<?php 


				foreach($package as $row):

					?>
				<tr>
					<td class = "text" ><?php echo $row['name'];?></td>
					<td><?php echo $row['summary']; ?></td>
					<td><?php echo $row['noofnights']; ?></td>
					<td>$<?php echo $row['cost']; ?></td>
				</tr>



				<?php 
				endforeach;?>
			</table>
</main>