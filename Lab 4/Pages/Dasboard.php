<?php require("head.php"); ?>

<div class="container custom-form-dashboard">
	<div class="navitems">
		<table style="width: 100%;">
			 <tr style="width: 100%;">

              <td style="width: 20%;">
			   <ul>

			   		<li>Admin Account</li>
			   		<hr>
                    <li><a href="../Pages/Dasboard.php">Dashboard</a></li>
                    <li><a href="../Pages/View Profile.php">View Profile</a></li>
                    <li><a href="../Pages/Edit Profile.php">Edit Profile</a></li>
                    <li><a href="../Pages/Change Profile Picture.php">Change Profile Picture</a></li>
                    <li><a href="../Pages/Change Password.php">Change Password</a></li>

                </ul>
               </td>
               <td style="width: 70%;">
               	<?php
					echo "Welcome ".$_SESSION['username'];

					/*if(isset($_COOKIE['username'])){
						echo "Welcome ".$_COOKIE['username'];
					}else{
						echo "cookie is not set";
					}*/

					?>
               </td>
             </tr>
            
		</table>            
    </div>
</div>
<?php require("foot.php"); ?>