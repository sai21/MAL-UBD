<?php
include 'config.php';
include 'opendb.php';

$colorselect=$_POST['colorselect'];
$colorselectbar=$_POST['colorselectbar'];
$colorselection=$_POST['colorselection'];

?>
<?php
		//2) this php for updating the bgcolor with current selected color	. put this above.
		
		//for updating color
		if(isset($_POST['apply']))
		{//read color from list, assign as $cn and $ch
			$queryapplycolor="SELECT * FROM color WHERE colorname='$colorselect'";
			$resultqueryapplycolor=mysql_query($queryapplycolor) or die("Error".mysql_error());
			while($rowappcolor=mysql_fetch_array($resultqueryapplycolor,MYSQL_ASSOC))
			{
				extract ($rowappcolor);
				$cn="{$rowappcolor['colorname']}";
				$ch="{$rowappcolor['colorhex']}";

			}
		//update color in bgcolor
			$queryupdate="UPDATE bgcolor SET colorname='$cn',colorhex='$ch' WHERE colorfor='background'";
			$resultqueryupdate=mysql_query($queryupdate) or die("Error".mysql_error());
			while($rowupdate=mysql_fetch_array($resultqueryupdate,MYSQL_ASSOC))
			{
				extract ($rowupdate);
			}	
		}
        ?>
        <?php
		//2) this php for updating the bgcolor with current selected color	. put this above.
		
		//for updating color
		if(isset($_POST['applybar']))
		{//read color from list, assign as $cn and $ch
			$queryapplycolorbar="SELECT * FROM color WHERE colorname='$colorselectbar'";
			$resultqueryapplycolorbar=mysql_query($queryapplycolorbar) or die("Error".mysql_error());
			while($rowappcolorbar=mysql_fetch_array($resultqueryapplycolorbar,MYSQL_ASSOC))
			{
				extract ($rowappcolorbar);
				$cnbar="{$rowappcolorbar['colorname']}";
				$chbar="{$rowappcolorbar['colorhex']}";

			}
		//update color in bgcolor
			$queryupdatebar="UPDATE bgcolor SET colorname='$cnbar',colorhex='$chbar' WHERE colorfor='bar'";
			$resultqueryupdatebar=mysql_query($queryupdatebar) or die("Error".mysql_error());
			while($rowupdatebar=mysql_fetch_array($resultqueryupdatebar,MYSQL_ASSOC))
			{
				extract ($rowupdatebar);
			}	
		}
        ?>
        <?php
		//2) this php for updating the bgcolor with current selected color	. put this above.
		
		//for updating color
		if(isset($_POST['applytion']))
		{//read color from list, assign as $cn and $ch
			$queryapplycolortion="SELECT * FROM color WHERE colorname='$colorselection'";
			$resultqueryapplycolortion=mysql_query($queryapplycolortion) or die("Error".mysql_error());
			while($rowappcolortion=mysql_fetch_array($resultqueryapplycolortion,MYSQL_ASSOC))
			{
				extract ($rowappcolortion);
				$cntion="{$rowappcolortion['colorname']}";
				$chtion="{$rowappcolortion['colorhex']}";

			}
		//update color in bgcolor
			$queryupdatetion="UPDATE bgcolor SET colorname='$cntion',colorhex='$chtion' WHERE colorfor='selection'";
			$resultqueryupdate=mysql_query($queryupdatetion) or die("Error".mysql_error());
			while($rowupdatetion=mysql_fetch_array($resultqueryupdatetion,MYSQL_ASSOC))
			{
				extract ($rowupdatetion);
			}	
		}
        ?>
<!DOCTYPE html>
<html>
<style>
li.test {
    display: inline;
}
p.one {
	border:10px;
    border-style: solid;
	<?php
		// 1) this php for read the color when start the webpage
		//this color was come from bgcolor table
		$querymycolor="SELECT * FROM bgcolor WHERE colorfor='background'";
		$resultquerymycolor=mysql_query($querymycolor) or die("Error".mysql_error());
		while($rowmycolor=mysql_fetch_array($resultquerymycolor,MYSQL_ASSOC))
		{
			extract ($rowmycolor);
			$cnnn="{$rowmycolor['colorname']}";
			$chhh="{$rowmycolor['colorhex']}";	
		}
		echo "border-color:";
		echo "$cnnn;";
		?>
}
p.two{
	border:10px;
    border-style: solid;
	<?php
		// 1) this php for read the color when start the webpage
		//this color was come from bgcolor table
		$querymycolorbar="SELECT * FROM bgcolor WHERE colorfor='bar'";
		$resultquerymycolorbar=mysql_query($querymycolorbar) or die("Error".mysql_error());
		while($rowmycolorbar=mysql_fetch_array($resultquerymycolorbar,MYSQL_ASSOC))
		{
			extract ($rowmycolorbar);
			$cnnnbar="{$rowmycolorbar['colorname']}";
			$chhhbar="{$rowmycolorbar['colorhex']}";	
		}
		echo "border-color:";
		echo "$chhhbar;";
		?>
		}
	
p.three{
	border:10px;
    border-style: solid;
	<?php
		// 1) this php for read the color when start the webpage
		//this color was come from bgcolor table
		$querymycolortion="SELECT * FROM bgcolor WHERE colorfor='selection'";
		$resultquerymycolortion=mysql_query($querymycolortion) or die("Error".mysql_error());
		while($rowmycolortion=mysql_fetch_array($resultquerymycolortion,MYSQL_ASSOC))
		{
			extract ($rowmycolor);
			$cnnntion="{$rowmycolortion['colorname']}";
			$chhhtion="{$rowmycolortion['colorhex']}";	
		}
		echo "border-color:";
		echo "$chhhtion;";
		?>
		}
.button {
    background-color:<?php echo "$cnnn" ?>;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
p.bgexam{
	background-color:#6C9}
	
table.example{
	background-color:<?php echo "$cnnn;"; ?>}
td.example{
	background-color:<?php echo "$cnnnbar;"; ?>}
td.example:hover{
	cursor:pointer;
	background-color:<?php echo "$cnnntion;"; ?>}
</style>
<form name="form1" method="post" action="">
  <p>Personalization
</p>
  <table width="80%" border="0">
    <tr>
      <td width="24%">Choose the colour of site page :</td>
      
      <td width="76%">
      <p class="one">
      
	    <label>
	      <select name="colorselect" id="colorselect">
	        <?php
	  //for show color from db in list
echo "<option>SELECT COLOUR</option>";
$querycolor="SELECT * FROM color ORDER BY colorname";
$resultquerycolor=mysql_query($querycolor);
echo "<ol>";
while ($rowcolor=mysql_fetch_array($resultquerycolor,MYSQL_ASSOC))
{
extract($rowcolor);
echo "<li type='1'>";
echo '<option>'.$colorname. '</option>';
echo "</li>";
}
echo "</ol>";
      ?>
        </select>
        </label>
        <label>
	      <input type="submit" name="apply" id="apply" value="apply">
        </label>
      
      </p>
      
        <!--<input type="radio" name="black" id="black" value="radio">-->
      </td>
    </tr>
    <tr>
    	<td>Choose the colour of menu bar:
        </td>
   	  <td>
      <p class="two">
      
	    <label>
	      <select name="colorselectbar" id="colorselectbar">
	        <?php
	  //for show color from db in list
	  echo "<option>SELECT COLOUR</option>";
$querycolorbar="SELECT * FROM color ORDER BY colorname";
$resultquerycolorbar=mysql_query($querycolorbar);
echo "<ol>";
while ($rowcolorbar=mysql_fetch_array($resultquerycolorbar,MYSQL_ASSOC))
{
extract($rowcolorbar);
echo "<li>";
echo '<option>'.$colorname. '</option>';
echo "</li>";
}
echo "</ol>";
      ?>
        </select>
        </label>
        <label>
	      <input type="submit" name="applybar" id="applybar" value="apply">
        </label>
      </p>
      </td>
    </tr>
    <tr>
      <td>Choose the colour of menu selection:</td>
      <td>
      <p class="three">
      
	    <label>
	      <select name="colorselection" id="colorselection">
	        <?php
	  //for show color from db in list
	  echo "<option>SELECT COLOUR</option>";
$querycolortion="SELECT * FROM color ORDER BY colorname";
$resultquerycolortion=mysql_query($querycolortion);
echo "<ol>";
while ($rowcolortion=mysql_fetch_array($resultquerycolortion,MYSQL_ASSOC))
{
extract($rowcolortion);
echo "<li>";
echo '<option>'.$colorname. '</option>';
echo "</li>";
}
echo "</ol>";
      ?>
        </select>
        </label>
        <label>
	      <input type="submit" name="applytion" id="applytion" value="apply">
        </label>
      </p>
      </td>
    </tr>
  </table>
  <p>Home Page Colour :</p>
  <table class="example"width="59%" border="0">
    <tr>
      <td width="9%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
      <td width="12%">&nbsp;</td>
      <td width="15%">&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="21%">&nbsp;</td>
      <td width="13%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="example" align="center">Home</td>
      <td class="example" align="center">News</td>
      <td class="example" align="center">Research</td>
      <td class="example" align="center">Team</td>
      <td class="example" align="center">Contact Us</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>\*Refesh your webpage to apply colour
 </p>
</p>
</form>
</html>
