<?php
include 'config.php';
include 'opendb.php';
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<table>
<tr>
<?php  $queryone="SELECT * FROM collaborationinfo";

			
			  $resultqueryone=mysql_query($queryone) or die("Error retrieving details");
			  
				while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
			  {
				extract($row);
				echo "<td>";
				  echo"<b> ";
				echo "
					<div class='img'>
					<a target='_blank' href='$link'>
					  <img src='img/collaberation/$logo' alt='' width='200' height='150'>
					</a>
					<div class='desc'>$collaborationname</div>";	
					echo "</div></b>";
					echo "</td>";
			  }
			      
?>
</tr>
</table>

</ul>  

</body>
</html>







	   
