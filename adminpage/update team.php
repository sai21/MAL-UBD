<?php
include 'config.php';
include 'opendb.php';

$groupnameupdate=$_POST['groupnamevar'];
$nameupdate=$_POST['namevar'];
$positionupdate=$_POST['positionvar'];
$expertiseupdate=$_POST['expertisevar'];
$contactupdate=$_POST['contactvar'];
$emailupdate=$_POST['emailvar'];


$selectname=$_POST['selectname'];
$currentgo=$_POST['currentgrouporder'];
?>
<?php
if(isset($_POST['gonow']))
{
		$queryupdate="UPDATE researchteam SET groupname='$groupnameupdate',name='$nameupdate',position='$positionupdate',expertise='$expertiseupdate',contact='$contactupdate',email='$emailupdate' WHERE grouporder='$currentgo'";
		$resultqueryupdate=mysql_query($queryupdate) or die("Error".mysql_error());
		while($rowupdate=mysql_fetch_array($resultqueryupdate,MYSQL_ASSOC))
		{
		extract ($rowupdate);
		}
}
?>
<form id="form1" name="form1" method="post" action=""> 
  <p>UPDATE TEAM INFORMATION </p>
  <p>
    <label>
      <select name="selectname" id="selectname">
      <?php
	  //for show name from db
echo "<option>SELECT</option>";
$querylistname="SELECT * FROM researchteam";
$resultquerylistname=mysql_query($querylistname);
echo "<ol>";
while ($rowlistname=mysql_fetch_array($resultquerylistname,MYSQL_ASSOC))
{
extract($rowlistname);
echo "<li>";
echo '<option>'.$name.'</option>';
echo "</li>";
}
echo "</ol>";

      ?>
      </select>
    </label>
  </p>
  <p>
    <label>
      <input type="submit" name="search" id="search" value="SEARCH" />
      <?php
	  if(isset($_POST['search']))
	  {

				$queryname="SELECT * FROM researchteam WHERE name='$selectname'";
				$resultqueryname=mysql_query($queryname) or die("Error".mysql_error());
				while($rowname=mysql_fetch_array($resultqueryname,MYSQL_ASSOC))
				{
					extract ($rowname);
					//$nid="{$rowtitle['newsid']}";
					//$tt="{$rowtitle['title']}";
					//$dd="{$rowtitle['date']}";
					//$inf="{$rowtitle['info']}";
					//$wrby="{$rowtitle['writtenby']}";
					$nid="{$rowname['grouporder']}";
					$gg="{$rowname['groupname']}";
					$n="{$rowname['name']}";
					$p="{$rowname['position']}";
					$ex="{$rowname['expertise']}";
					$cn="{$rowname['contact']}";
					$em="{$rowname['email']}";
				}

		}
      ?>
    </label>
  </p>
</form>
<form id="form2" name="form2" method="post" action="">
  <table width="80%" border="0">
    <tr>
      <td>Team ID:</td>
      <td><label>
        <input name="currentgrouporder" type="text" id="currentgrouporder" value="<?php echo $nid;?>" size="70" readonly="readonly"/>
      </label></td>
    </tr>
    <tr>
      <td width="13%">Team Name :</td>
      <td width="87%"><label>
        <!--<input name="teamname" type="text" id="teamname" value="" cols="100" rows="1"/>-->
        <input name="groupnamevar" type="text" id="groupnamevar" value="<?php echo $gg;?>" size="70""/>
      </label></td>
    </tr>
    <tr>
      <td>Member Name :</td>
      <td><label>
        <input name="namevar" type="text" id="namevar" value="<?php echo $n;?>" size="70" />
      </label></td>
    </tr>
    <tr>
      <td>Position :</td>
      <td><label>
        <input name="positionvar" type="text" id="positionvar" value="<?php echo $p;?>" size="70" />
      </label></td>
    </tr>
    <tr>
      <td>Expertise :</td>
      <td><label>
        <input name="expertisevar" type="text" id="expertisevar" value="<?php echo $ex;?>" size="70" />
      </label></td>
    </tr>
    <tr>
      <td>Contact :</td>
      <td><label>
        <input name="contactvar" type="text" id="contactvar" value="<?php echo $cn;?>" size="70" />
      </label></td>
    </tr>
    <tr>
      <td>E-mail Address :</td>
      <td><label>
        <input name="emailvar" type="text" id="emailvar" value="<?php echo $em;?>" size="70" />
      </label></td>
    </tr>
  </table>
  <p>
    <label>
      <input type="submit" name="gonow" id="gonow" value="UPDATE" onclick="successteamupdate()"/>
    </label>

  </p>
</form>
<p>&nbsp;</p>

<script>
function successteamupdate() {
    alert("Your Team is successful updated");
}
function backtoindex(){
	window.location.href = "index.php";
	}
</script>

