<?php
include 'config.php';
include 'opendb.php';

$name=$_POST['name'];

?>
<form name="form1" method="post" action="">
  ADD FUND INFORMATION
</form>
<form name="form2" method="post" action="">
  <table width="80%" border="0">
    <tr>
      <td width="15%">Institution :</td>
      <td width="85%"><label>
        <textarea name="name" id="name" cols="70" rows="1"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>
    <label>
      <input name="gonow" type="submit" id="gonow" value="Submit" onclick="success()">
    </label>
    <label>
    <!--<input type="submit" name="backtowelcome" id="backtowelcome" value="REFRESH" onclick="backtoindex()"/>-->
    </label>
  </p>
  <p>
<?php

if(isset($_POST['gonow']))
{
		$querytitle="INSERT INTO fund (name) VALUES ('$name')";
		$resultquerytitle=mysql_query($querytitle) ;
}
?>
  </p>
</form>
<p>&nbsp;</p>
<script>
function success() {
    alert("Your Form is successful Submitted");
}
function backtoindex(){
	window.location.href = "index.php";
	}
</script>
