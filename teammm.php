
<?php
include 'config.php';
include 'opendb.php';
?>
<style type="text/css">
<!--
.team {
	text-align: center;
}
.team {
	text-align: left;
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	color: #000;
	font-weight: bold;
}
.teamheadline {
	text-align: center;
	background-color:#CCC;
}
-->
</style>

<h2 class="teamheadline">Team<br></h2>


<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="" border="0" align="center">
 
<?php

	$queryone="SELECT * FROM researchteam";
	$resultqueryone=mysql_query($queryone) or die("Error retrieving details");

	while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
	{
		extract($row);
		echo "<center><tr>";
	 
		echo "<td width='125' height='200'>";
		echo "<img src='img/our-team/$pic' alt='' name='' width='160' height='130'><br><br><br><br>";
		echo "</td>";echo "<td width='25'></td>";
		echo "<td width='685' height='200' class='team'>";
		
		echo "<b>Group Name:$groupname<br>
				Name: $name<br>
				Position: $position<br>
				Expertise: $expertise<br>
				Contact: $contact<br>
				Email: $email<br><b>";
		echo "<br><br><br>";
		echo "</td>";
		echo "</tr><center>";
	}?>
</table>
