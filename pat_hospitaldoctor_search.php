<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<center><h1>SEARCH RESULT</h1></center>
<br>
<a class="addnew" href="pat_hospitaldoctor.php" style="font-face:Khmer OS Battambang; font-size:16px;">BACK</a></font>
	<table>
    	<tr>
            <th>DoctorID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>REG-NO.</th>
        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
			echo '<a href="pat_hospitaldoctor.php"><img src="images/Users_Group.png" title="Go Back"></a>';
		}
	?>
    <?php
		$cbo = $_POST['cbosearch'];
		$search = $_POST['txtsearch'];
		mysql_connect("localhost","root","") or die (mysql_error());
		mysql_select_db ("hospital");
	?>
    <?php
		if($cbo=="DoctorID")
		{
			$id = "SELECT * FROM hospitaldoctor WHERE d_id='$search'";
			$result = mysql_query($id);
			
			if (!$result) {
				echo "INVALID SEARCH ".mysql_error();
			} else {
				while($di=mysql_fetch_array($result)) {
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
                <td><?php echo $di[2]; ?></td>
                <td><?php echo $di[3]; ?></td>
				</td>
			</tr>
    <?php
			}
			}
		
		} else if($cbo=="FIRST NAME")
		{
			$na = mysql_query("SELECT * FROM hospitaldoctor WHERE d_f_name like '".$search."%'");
	?>
    <?php
		while($an=mysql_fetch_array($na))
		{
	?>
			<tr>
				<td><?php echo $an[0]; ?></td>
				<td><?php echo $an[1]; ?></td>
                <td><?php echo $an[2]; ?></td>
                <td><?php echo $an[3]; ?></td>
				</td>
			</tr>
            <?php
				}
			?>  
     <?php
		}else if($cbo=="LAST NAME")
				{
        $add = mysql_query("SELECT * FROM hospitaldoctor WHERE d_l_name like '".$search."%'");
     ?>
		<?php
		while($dda=mysql_fetch_array($add))
		{
		?>
			<tr>
				<td><?php echo $dda[0]; ?></td>
				<td><?php echo $dda[1]; ?></td>
                <td><?php echo $dda[2]; ?></td>
                <td><?php echo $dda[3]; ?></td>
				</td>
			</tr>
            <?php
				}
			}else if($cbo=="REG-NO.")
			{
			$g = mysql_query("SELECT * FROM hospitaldoctor WHERE reg_no like '".$search."%'");
			?>  
			<?php
				while($ge=mysql_fetch_array($g))
				{			
			?>
            <tr>
				<td><?php echo $ge[0]; ?></td>
				<td><?php echo $ge[1]; ?></td>
                <td><?php echo $ge[2]; ?></td>
                <td><?php echo $ge[3]; ?></td>
				</td>
			</tr>
            
            <?php
				}
			}
			?>
</table>
</body>
</html>