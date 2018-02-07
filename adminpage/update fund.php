<?php
include 'config.php';
include 'opendb.php';

$selectname=$_POST['selectname'];

$fundidupdate=$_POST['currentfundid'];
$fundnameupdate=$_POST['editname'];


?>

<form name="form1" method="post" action="">
  UPDATE FUND INFORMATION
</form>
<form name="form2" method="post" action="">
  <p>
    <label>
      <select name="selectname" id="selectname">
        <?php
	  //for show title from db
echo "<option>SELECT</option>";
$querylisttitle="SELECT * FROM fund";
$resultquerylisttitle=mysql_query($querylisttitle);
echo "<ol>";
while ($rowlisttitle=mysql_fetch_array($resultquerylisttitle,MYSQL_ASSOC))
{
extract($rowlisttitle);
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
    </label>
    <?php
	  if(isset($_POST['search']))
	  {

				$querytitle="SELECT * FROM fund WHERE name='$selectname'";
				$resultquerytitle=mysql_query($querytitle) or die("Error".mysql_error());
				while($rowtitle=mysql_fetch_array($resultquerytitle,MYSQL_ASSOC))
				{
					extract ($rowtitle);
					$fid="{$rowtitle['id']}";
					$n="{$rowtitle['name']}";
				}

		}
      ?>
  </p>

  <table width="80%" border="0">
        <tr>
      <td width="14%">Collaboration ID  :</td>
      <td width="86%"><label>
        
        <input name="currentfundid" type="text" id="currentfundid" value="<?php echo $fid;?>" size="80" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
    <tr>
      <td width="14%">Institution  :</td>
      <td width="86%"><label>
        
        <input name="editname" type="text" id="editname" value="<?php echo $n;?>" size="80" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="86%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="86%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="86%">&nbsp;</td>
    </tr>
  </table>
  <p>
    <label>
      <input type="submit" name="update" id="update" value="UPDATE" onclick="successupdate()"/>
    </label>
  </p>
</form>
<p>&nbsp;</p>
<?php
if(isset($_POST['update']))
{
		$queryupdate="UPDATE fund SET name='$fundnameupdate' WHERE id='$fundidupdate'";
		$resultqueryupdate=mysql_query($queryupdate) or die("Error".mysql_error());
		while($rowupdate=mysql_fetch_array($resultqueryupdate,MYSQL_ASSOC))
		{
		extract ($rowupdate);
		}
}
?>

<script>
function successupdate() {
    alert("Your Fund Information is successful Updated");
}
function backtowelcome(){
	window.location.href = "welcome_test.php";
	}
</script>

