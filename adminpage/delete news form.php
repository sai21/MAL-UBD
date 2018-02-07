<?php
include 'config.php';
include 'opendb.php';

//$selectedtitle=$_POST['selectedtitle'];
//$searchid=$_POST['searchvalue'];
//$tablename=$_POST['tablename'];

$selectnews=$_POST['selectnews'];
$newsidupdate=$_POST['currentnewsid'];
$titleupdate=$_POST['edittitle'];
$dateupdate=$_POST['editdate'];
$infoupdate=$_POST['editinfo'];
$writtenbyupdate=$_POST['editwrittenby'];

					//$tt=$_POST['tt'];
					//$dd=$_POST['dd'];
					//$inf=$_POST['inf'];
					//$wrby=$_POST['wrby'];
?>

<?php
if(isset($_POST['delete']))
{
		//$queryupdate="UPDATE news SET writtenby='$writtenby' WHERE newsid='$nid'";
		$queryupdate="DELETE FROM news WHERE newsid='$newsidupdate'";
		$resultqueryupdate=mysql_query($queryupdate) or die("Error".mysql_error());
		while($rowupdate=mysql_fetch_array($resultqueryupdate,MYSQL_ASSOC))
		{
		extract ($rowupdate);
		}
}
?>
<form name="form1" method="post" action=""> 
DELETE NEWS
</form>
<form name="form2" method="post" action="">
  <p>
    <label>
      <select name="selectnews" id="selectnews">
        <?php
	  //for show title from db
echo "<option>SELECT</option>";
$querylisttitle="SELECT * FROM news";
$resultquerylisttitle=mysql_query($querylisttitle);
echo "<ol>";
while ($rowlisttitle=mysql_fetch_array($resultquerylisttitle,MYSQL_ASSOC))
{
extract($rowlisttitle);
echo "<li>";
echo '<option>'.$title.'</option>';
//echo "$title";
//echo '';
echo "</li>";

}
echo "</ol>";

      ?>
      </select>
    </label>
  </p>
  <p>
    <label>
      <input type="submit" name="search" id="search" value="SEARCH NEWS" />
    </label>
    <?php
	  if(isset($_POST['search']))
	  {

				$querytitle="SELECT * FROM news WHERE title='$selectnews'";
				$resultquerytitle=mysql_query($querytitle) or die("Error".mysql_error());
				while($rowtitle=mysql_fetch_array($resultquerytitle,MYSQL_ASSOC))
				{
					extract ($rowtitle);
					$nid="{$rowtitle['newsid']}";
					$tt="{$rowtitle['title']}";
					$dd="{$rowtitle['date']}";
					$inf="{$rowtitle['info']}";
					$wrby="{$rowtitle['writtenby']}";
				}

		}
      ?>
  </p>

  <table width="80%" border="0">
        <tr>
      <td width="10%">News ID  :</td>
      <td width="90%"><label>
        
        <input name="currentnewsid" type="text" id="currentnewsid" value="<?php echo $nid;?>" size="80" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
    <tr>
      <td width="10%">Title  :</td>
      <td width="90%"><label>
        
        <input name="edittitle" type="text" id="edittitle" value="<?php echo $tt;?>" size="80" readonly="readonly"/>
      </label></td>
    </tr>
    <tr>
      <td>Date  :</td>
      <td width="90%"><label>
        
        <input name="editdate" type="text" id="editdate" value="<?php echo $dd;?>" size="80" />
      </label></td>
    </tr>
    <tr>
      <td>Info    :</td>
      <td width="90%"><label>
        
        <input name="editinfo" type="text" id="editinfo" value="<?php echo $inf;?>" size="80" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
      <td>Writen By :</td>
      <td width="90%"><label>
        
        <input name="editwrittenby" type="text" id="editwrittenby" value="<?php echo $wrby;?>" size="80" readonly="readonly" />
      </label></td>
    </tr>
  </table>
  <p>
    <label>
      <input type="submit" name="delete" id="delete" value="DELETE" onclick="successdelete()"/>
    </label>
  </p>
</form>
<p>&nbsp;</p>


<script>
function successdelete() {
    alert("Your News is successful Deleted");
}
function backtowelcome(){
	window.location.href = "welcome_test.php";
	}
</script>

