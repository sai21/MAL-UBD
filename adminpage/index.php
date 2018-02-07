<?php
   $linkid=$_GET['pageid'];
   $menuid=$_GET['menuidi'];
?>

<form name="form1" method="post" action="">
  <table width="80%" border="0" align="center">
    <tr>
      <td align="center"><a href="?menuidi=home">Home</a> | <a href="?menuidi=news">News</a> | <a href="?menuidi=team">Team</a> | <a href="?menuidi=collaboration">Collaboration</a> | <a href="?menuidi=fund">Fund</a> | <a href="?menuidi=personalization">Personalization</a></td>
    </tr>
    <tr>
      <td>
      <?php
	  //for home discription
	  if ($menuid=='home')
	  	{
			echo "<center>Welcome to administrator page.</center>";
		}
		else
		{
			echo "";
		}
      ?>
        <?php
		// for news
	       if ($menuid=='news')
	        {
				echo "<center><a href='?menuidi=news&pageid=1'>Add News</a> | <a href='?menuidi=news&pageid=2'>Edit News</a> | <a href='?menuidi=news&pageid=3'>Delete News</a></center>";
				if($linkid=='1')
				{
		           include 'add news.php';
				}
				elseif($linkid=='2')
				{
					include 'update news form.php';
				}
				elseif($linkid=='3')
				{
					include 'delete news form.php';
				}
				else
				{
					echo "<center>Welcome to the news editing page</center>";
				}
		    }
			

			else 
			{
			  echo "";	
			}
      ?>
      <?php
	  //for team
	  if ($menuid=='team')
	  {
		  echo "<center><a href='?menuidi=team&pageid=4'>Add Team Information</a> | <a href='?menuidi=team&pageid=5'>Edit Team Information</a> | <a href='?menuidi=team&pageid=6'>Delete Team</a></center>";
		  if($linkid=='4')
		  {
			include 'add team.php'; 
		  }
		  elseif($linkid=='5')
		  {
			 include 'update team.php'; 
		   }
		   elseif($linkid=='6')
			{
				include 'delete team.php';
			}
		   else
		   {
			  echo "<center>Welcome to the team editing page</center>"; 
			}
	  }
	  else
	  {
		 echo ""; 
	  }
      ?>
      <?php
	  //for collaboration
	  if ($menuid=='collaboration')
	  {
		  echo "<center><a href='?menuidi=collaboration&pageid=7'>Add Collaboration Information</a> | <a href='?menuidi=collaboration&pageid=8'>Edit Collaboration Information</a> | <a href='?menuidi=collaboration&pageid=9'>Delete Collaboration</a></center>";
		  if($linkid=='7')
		  {
			  include 'add colla.php';
			}
			elseif($linkid=='8')
			{
				include 'update colla.php';
			}
			elseif($linkid=='9')
			{
				include 'delete colla.php';
			}
			else
			{
				echo "<center>Welcome to the collaboration editing page</center>"; 
			}
		}
      ?>
      <?php
	  //for fund
	  if ($menuid=='fund')
	  {
		  echo "<center><a href='?menuidi=fund&pageid=10'>Add Fund Information</a> | <a href='?menuidi=fund&pageid=11'>Edit Fund Information</a> | <a href='?menuidi=fund&pageid=12'>Delete Fund</a></center>";
		  if($linkid=='10')
		  {
			  include 'add fund.php';
			}
			elseif($linkid=='11')
			{
				include 'update fund.php';
			}
			elseif($linkid=='12')
			{
				include 'delete fund.php';
			}
			else
			{
				echo "<center>Welcome to the fund editing page</center>"; 
			}
		}
		if ($menuid=='personalization')
		{
			echo "<center><a href='?menuidi=personalization&pageid=13'>Edit Color</a></center>";
			if($linkid=='13'){
				include 'personalization.php';
			}
			else
			{
				echo "<center>Welcome to the editing color page</center>"; 
			}
		}
      ?>
        
      
      &nbsp;</td>
    </tr>
  </table>
</form>
