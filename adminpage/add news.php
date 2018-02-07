<?php
include 'config.php';
include 'opendb.php';

$title=$_POST['titlevalue'];
$date=$_POST['datevalue'];
$info=$_POST['infovalue'];
$writtenby=$_POST['writtenbyvalue'];
$picname=$_FILES["fileToUpload"]["name"];
?>
<form id="form1" name="form1" method="post" action="">
  ADD NEWS FORM
</form>
<form action="" method="post" enctype="multipart/form-data">
  <table width="80%" border="0">
    <tr>
      <td width="13%">Title  :</td>
      <td width="87%"><label>
        <input name="titlevalue" type="text" id="titlevalue" value="<?php echo $title; ?>" size="70"/>
      </label></td>
    </tr>
    <tr>
      <td>Date :</td>
      <td><label>
        <input name="datevalue" type="text" id="datevalue" value="<?php echo $date;?>" size="70"/>
      </label></td>
    </tr>
    <tr>
      <td>Info  :</td>
      <td><label>
        <input name="infovalue" type="text" id="infovalue" value="<?php echo $info;?>" size="70"/>
      </label></td>
    </tr>
    <tr>
      <td>written By :</td>
      <td><label>
        <input name="writtenbyvalue" type="text" id="writtenbyvalue" value="<?php echo $writtenby;?>" size="70"/>
      </label></td>
    </tr>
    <tr>
      <td>Select image to upload:</td>
      <td><input type="file" name="fileToUpload" id="fileToUpload">
    </td>
    </tr>
    <tr>
    	<td></td>
        <td><?php
$target_dir = "img/news/";
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
		$querytitle="INSERT INTO news (title,date,info,writtenby,photo) VALUES ('$title','$date','$info','$writtenby','$picname')";
		$resultquerytitle=mysql_query($querytitle) ;
		echo "<script>success();</script>";
		
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

