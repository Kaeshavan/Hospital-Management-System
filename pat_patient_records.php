<?php
	include 'header.php';

?>
</div>
<div class="wrap">
<br>
<a class="addnew" href="patient.php" style="font-face:Khmer OS Battambang; font-size:16px;">PATIENT DASHBOARD</a></font>
<br><br>
<center><h1>PATIENT COMPLETE RECORD</h1></center>
<br>

<br><br>
	<div class="search">
	<form method="post" action="pat_patient_records_search.php">
    <select name="cbosearch">
    	<option>Patient ID</option>
    </select>
	<br><br>
	<input type="text" name="txtsearch" placeholder="Type to Search" /><input type="submit" name="cmdsearch" value="Search" />
    </form>
    </div>
	<br>


	</div>
	<br><br>
</body>
</html>