<!DOCTYPE html>
<?php
include 'config.php';
include 'opendb.php';
$linkid=$_GET['pageid'];
?>
<html>
<head>
  <meta charset="utf-8">
  <title>MAL</title>
  <!-- Styles -->
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/bootstrap-override.css" rel="stylesheet">
  <!-- Font Avesome Styles -->
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
<style type="text/css">
<!--
.homeinfo {
	text-align: center;
	background-color:#CCC;
}
-->

div.img {
    margin: 5px;
    border: 0px solid #ccc;
    float: left;
    width: 180px;
	display: inline;
}

div.img:hover {
    border: 0px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
ol#menu {
    display: inline;
}

</style>
</head>
<body>
<form name="form1" method="post" action="">
  
<table width="80%" border="0">
  <tr>
  	<td>
    	<h2 class="homeinfo">Motion Analysis Lab</h2>
    </td>
  </tr>
  <tr>
  	<td>
    	<center><?php  $queryone="SELECT * FROM news";
			  echo"<b> <div class='row space40'></div>
          		   <div class='slider1 flexslider'> 
              		<ul class='slides'>";
			  $resultqueryone=mysql_query($queryone) or die("Error retrieving details");
				while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
			  {
				extract($row);
				echo "
              			<li>
    	    	    <img src='img/news/$photo' width='150%' height='100%' >
					<br><h4>$title</h4>
    	    			</li>";	
			  }
			   echo "</ul></div></b>";   ?></center>
    </td>
  </tr>
  <tr>
  	<td>
    	<center><h2 class="homeinfo">About us</h2><?php
     $queryone="SELECT * FROM about";
			  
			  $resultqueryone=mysql_query($queryone) or die("Error retrieving details");
				while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
			  {
				extract($row);
				echo "<h4>$shortinfo<br><br></h4>";	
			  }
			    ?></center>
    </td>
  </tr>
  <tr>
  <td><h2 class="homeinfo">Collaboration</h2>
  <?php  include 'colla list.php';?></td>
  </tr>
  <tr>
  <td>
  <center><h2 class="homeinfo">Fund By</h2><?php
     $queryone="SELECT * FROM fund";
			  
			  $resultqueryone=mysql_query($queryone) or die("Error retrieving details");
				while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
			  {
				extract($row);
				echo "<h4>$name<br></h4>";	
			  }
			    ?></center></td>
  </tr>
  </table>
</form>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" defer src="js/jquery.flexslider.js"></script>
</body>
</html>
