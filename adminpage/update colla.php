<?php
include 'config.php';
include 'opendb.php';

$selectname=$_POST['selectname'];

$colidupdate=$_POST['currentcolid'];
$colnameupdate=$_POST['editname'];
$detailupdate=$_POST['editdetail'];
$periodupdate=$_POST['editperiod'];
$linkupdate=$_POST['editlink'];

?>

<form name="form1" method="post" action="">
  UPDATE COLLABORATION INFORMATION
</form>
<form name="form2" method="post" action="">
  <p>
    <label>
      <select name="selectname" id="selectname">
        <?php
	  //for show title from db
echo "<option>SELECT</option>";
$querylisttitle="SELECT * FROM collaborationinfo";
$resultquerylisttitle=mysql_query($querylisttitle);
echo "<ol>";
while ($rowlisttitle=mysql_fetch_array($resultquerylisttitle,MYSQL_ASSOC))
{
extract($rowlisttitle);
echo "<li>";
echo '<option>'.$collaborationname.'</option>';
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

				$querytitle="SELECT * FROM collaborationinfo WHERE collaborationname='$selectname'";
				$resultquerytitle=mysql_query($querytitle) or die("Error".mysql_error());
				while($rowtitle=mysql_fetch_array($resultquerytitle,MYSQL_ASSOC))
				{
					extract ($rowtitle);
					$cid="{$rowtitle['colid']}";
					$cn="{$rowtitle['collaborationname']}";
					$d="{$rowtitle['detail']}";
					$p="{$rowtitle['period']}";
					$l="{$rowtitle['link']}";
				}

		}
      ?>
  </p>

  <table width="80%" border="0">
        <tr>
      <td width="14%">Collaboration ID  :</td>
      <td width="86%"><label>
        
        <input name="currentcolid" type="text" id="currentcolid" value="<?php echo $cid;?>" size="80" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
    <tr>
      <td width="14%">Institution  :</td>
      <td width="86%"><label>
        
        <input name="editname" type="text" id="editname" value="<?php echo $cn;?>" size="80" />
      </label></td>
    </tr>
    <tr>
      <td>Institution Detail  :</td>
      <td width="86%"><label>
        
        <input name="editdetail" type="text" id="editdetail" value="<?php echo $d;?>" size="80" />
      </label></td>
    </tr>
    <tr>
      <td>Period    :</td>
      <td width="86%"><label>
        
        <input name="editperiod" type="text" id="editperiod" value="<?php echo $p;?>" size="80" />
      </label></td>
    </tr>
    <tr>
      <td>Link :</td>
      <td width="86%"><label>
        
        <input name="editlink" type="text" id="editlink" value="<?php echo $l;?>" size="80" />
      </label></td>
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
		$queryupdate="UPDATE collaborationinfo SET collaborationname='$colnameupdate',detail='$detailupdate',period='$periodupdate',link='$linkupdate' WHERE colid='$colidupdate'";
		$resultqueryupdate=mysql_query($queryupdate) or die("Error".mysql_error());
		while($rowupdate=mysql_fetch_array($resultqueryupdate,MYSQL_ASSOC))
		{
		extract ($rowupdate);
		}
}
?>

<script>
function successupdate() {
    alert("Your Collaboration Information is successful Updated");
}
function backtowelcome(){
	window.location.href = "welcome_test.php";
	}
</script>

