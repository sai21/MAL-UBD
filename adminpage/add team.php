<?php
include 'config.php';
include 'opendb.php';

$groupnameadd=$_POST['groupnamevar'];
$nameadd=$_POST['namevar'];
$positionadd=$_POST['positionvar'];
$expertiseadd=$_POST['expertisevar'];
$contactadd=$_POST['contactvar'];
$emailadd=$_POST['emailvar'];
$picname=$_FILES["fileToUpload"]["name"];
?>
<form id="form1" name="form1" method="post" action="">
  ADD TEAM INFORMATION
</form>
<form action="" method="post" enctype="multipart/form-data">
  <table width="80%" border="0">
    <tr>
      <td width="13%">Team Name :</td>
      <td width="87%"><label>
        <input name="groupnamevar" type="text" id="groupnamevar" value="<?php echo $groupnameadd; ?>" size="70"/>
      </label></td>
    </tr>
    <tr>
      <td>Member Name :</td>
      <td><label>
        <input name="namevar" type="text" id="namevar" value="<?php echo $nameadd;?>" size="70"/>
      </label></td>
    </tr>
    <tr>
      <td>Position :</td>
      <td><label>
        <input name="positionvar" type="text" id="positionvar" value="<?php echo $positionadd;?>" size="70"/>
      </label></td>
    </tr>
    <tr>
      <td>Expertise :</td>
      <td><label>
        <input name="expertisevar" type="text" id="expertisevar" value="<?php echo $expertiseadd;?>" size="70"/>
      </label></td>
    </tr>
    <tr>
      <td>Contact :</td>
      <td><label>
        <input name="contactvar" type="text" id="contactvar" value="<?php echo $contactadd;?>" size="70"/>
      </label></td>
    </tr>
    <tr>
      <td>E-mail Address :</td>
      <td><label>
        <input name="emailvar" type="text" id="emailvar" value="<?php echo $emailadd;?>" size="70"/>
      </label></td>
    </tr>
    </tr>
    <tr>
      <td>Select image to upload:</td>
      <td><input type="file" name="fileToUpload" id="fileToUpload">
    </td>
    </tr>
    <tr>
    	<td></td>
        <td><?php
$target_dir = "img/our-team/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["gonow"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "<b>File is an image - Type of file = " . $check["mime"] . ".</b> (pass)";
        $uploadOk = 1;
    } else {
        echo "<b>File is not an image.</b> (fail)";
        $uploadOk = 0;
    }
}

if(isset($_POST["gonow"])){
// Check if file already exists
if (file_exists($target_file)) {
    echo "<br><b>Sorry, file already exists.</b> (fail)";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "<br><b>Sorry, your file is too large.</b> (fail)";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<br><b>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</b> (fail)";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br><br><b><u>Sorry, your file was not uploaded.</u></b>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br><br><u>The file <b>". basename( $_FILES["fileToUpload"]["name"]). "</b> has been uploaded.</u>";
		$queryaddteam="INSERT INTO researchteam (groupname,name,position,expertise,contact,email,pic) 									 VALUES('$groupnameadd','$nameadd','$positionadd','$expertiseadd','$contactadd','$emailadd','$picname')";
		$resultqueryaddteam=mysql_query($queryaddteam) ;
		echo "<script>success();</script>";
		file_get_contents('http://www.example.com/');
		
    } else {
        echo "<br><br><b><u>Sorry, there was an error uploading your file.</u></b>";
    }
}
}
?></td>
    </tr>
  </table>
  <p>
    <label>
      <input type="submit" name="gonow" id="gonow" value="ADD"/>
    </label>
    <label>
      <!--<input type="submit" name="backtowelcome" id="backtowelcome" value="REFRESH" onclick="backtoindex()"/>-->
     </label>
  </p>
</form>
<p>&nbsp;</p>
<?php //team info
if(isset($_POST['gonow']))
{
	
}
?>
<script>
function success() {
    alert("Your Team is successful Added");
}
function backtoindex(){
	window.location.href = "index.php";
	}
</script>

