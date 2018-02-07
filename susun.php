<!DOCTYPE html>
<html>
<head>

<?php
include 'config.php';
include 'opendb.php';
$projectid=$_GET['projectid'];
?>
<style>
div.imgproject {
    margin: 45px;
    border: 1px solid #ccc;
    float: left;
    width: 20%;
	
}
div.imgproject:hover {
    border: 1px solid #000;
}
div.imgproject img {
    width: 100%;
    height: auto;
}
div.descproject {
	
    text-align: center;
}
.teamheadline {
	text-align: center;
	background-color:#CCC;
}
</style>
</head>
<body>
<table width="793" border="0" align="center">
 <h2 class="teamheadline">Our Team is currently involved in the following projects<br></h2>
<?php

	$queryone="SELECT * FROM researchteam";
	$resultqueryone=mysql_query($queryone) or die("Error retrieving details");

	while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
	{
		extract($row);
echo "
	 <div class='imgproject'>
  <a href='#$projectvideo' display='center'>
    <img src='img/research/$picproject' alt='' width='600' height='400'>
  </a>
  <div class='descproject'>$project</div>
</div>";
	}?>
</table>    
 <table><p>&nbsp;&nbsp;&nbsp;</p>
    <?php 
	 $queryone="SELECT * FROM researchteam";
			  $resultqueryone=mysql_query($queryone) or die("Error retrieving details");
			 
			  while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
			  {
				extract($row);
				echo "<center><video id='$projectvideo' width='850' height='500' controls>
					  <source src='img/vedio/$projectvideo' type='video/mp4'></video>
				      <p></p><script>
					   function myFunction() 
						{
						  var x = document.getElementById('myVideo').duration;
						  document.getElementById('demo').innerHTML = x;
						}  </script>";
				echo "<center>
				<p id='$projectvideo'><p>
				Project: <b>$project</b><br>
				Research By: <b>$name</b><br>
				Position: <b>$position</b><br>
				Started: <b>$started</b><br>
				Duration: <b>$duration</b><br><br><br><br><br><br><br><br><br><br><br><br>";
				
			  }		  
	
?>
   </table>
</form>
</body>
</html>

