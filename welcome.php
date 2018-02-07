<?php
	include 'config.php';
	include 'opendb.php';
    include'session.php';

   $linkid=$_GET['pageid'];
?>
<html>
   
   <head>
      <title>Welcome</title>
   </head>   
   <style>
   .teamheadline {
	text-align: center;
	background-color:#CCC;
}
   </style>
   <body>
      <h2 class="teamheadline">Welcome <?php echo "$login_session"; ?>  </h2>
      <form name="form2" method="post" action="">
      <div align = "right">
        <p><a href = "logout.php">Sign Out</a>
        </p>
        </div>
      </form>
      <form name="form1" method="post" action="">
      <p>
        <?php include 'adminpage/index.php';?>
      </p>
      </form>
<h2>&nbsp;</h2>
<h1>&nbsp;</h1> 
      <h2>&nbsp;</h2>
</body>

   
</html>
<?php /*?><?php
$querytitle="SELECT * FROM user WHERE title='$selectnews'";
				$resultquerytitle=mysql_query($querytitle) or die("Error".mysql_error());
				while($rowtitle=mysql_fetch_array($resultquerytitle,MYSQL_ASSOC))
				{
					extract ($rowtitle);
				
				}
?><?php */?>