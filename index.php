<!DOCTYPE html>
<?php
include 'config.php';
include 'opendb.php';
$linkid=$_GET['pageid'];
?>
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
?>
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
?>
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
?>
<html>
<head>
  <!-- Basic Meta Tags -->
  <meta charset="utf-8">
  <title>MAL</title>
  <link href="img/logo.png" rel="icon" type="image/png">
  <!-- Styles -->
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/bootstrap-override.css" rel="stylesheet">
  <!-- Font Avesome Styles -->
  <link href="css/font-awesome/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
<style type="text/css">
<!--
#content .container .row .span12 .span12 {
	color: #000;
}
-->
th.headline{
	background-color:#FFF;
	text-align: justify;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-style: italic;
}
li.css{
	background-color:<?php echo $chhhbar ?>;}
li.css:hover{
	background-color:black}
#nav > ul > li:hover > a,
						#nav > ul:not( :hover ) > li.active > a
						{
							
							background-color: <?php echo $chhhtion ?>; /*red orange strong hover................*/
						}
	.focushighlight{
	text-align: center;
	background-color:#CCC;
		}
</style>
<style>
</style>

</head>
<body style="background-color:<?php echo $chhh ?>">
  <!-- Header -->
<header id="header">
    <div class="container">
      <div class="row t-container">
        <!-- Logo -->
        <div class="span3">
          <div class="logo"><a href="index.htm"><a href="index.htm"><img src="img/logo-header.png" alt=""></a></div>
        </div>
        <div class="span9">
          <div class="row space60"></div>
             <nav id="nav" role="navigation" name="nav">
               	<a href="#nav" title="Show navigation">Show navigation</a>
	            <a href="#" title="Hide navigation">Hide navigation</a>
	            <ul >
	           	<li class="css"><a href="index.php" title="">Home</a></li>    <!--class="active"-->          
               	<li class="css"><a href="?pageid=1" title="">News</a></li>
				<li class="css"><a href="?pageid=2" title=""><span>Research </span></a>
	        		<ul> <!-- Submenu -->
               		  <?php  $queryone="SELECT * FROM researchteam";
					$resultqueryone=mysql_query($queryone) or die("Error retrieving details");
                      while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
                      {
                          extract($row);
                         echo " <li><a href='?pageid=2#$projectvideo' title=''>$project</a></li>";

                          }?>
   		      </ul> <!-- End Submenu --></li>
               	<li class="css"><a href="?pageid=3" title="">Team</a></li>
               	<li class="css"><a href="?pageid=4" title="">Contact Us</a></li>
	           </ul>
          </nav>
        </div> 
      </div> 
     <div class="row space40"></div>
   
<!-- Titlebar -->
<section id="titlebar">
 <p>
 <div class="container">
  <table width="20%" border="0">
  <tr>
    <td width="81%" bgcolor="#FFFFFF"><div class="eight columns">
			<nav id="breadcrumbs">
			  <ul>
				<li>You are here:</li>
					<li><a href="index.php">Home</a></li>
				<li>
					<?php
                    if($linkid=='1'){
                        echo"<b>News</b>";}
                    elseif($linkid=='2'){
                        echo"<b>Research Project</b>";}
                    elseif($linkid=='3'){
                        echo"<b>Research Team</b>";}
                    elseif($linkid=='4'){
                        echo"<b>Contact Us</b>";}
                    else{
                        echo"<b></b>";}
                    ?>
				</li>
			  </ul>                
		  </nav>
		</div></td>
    <td width="19%" bgcolor="#FFFFFF"><div>
    <nav id="breadcrumbs"> <ul><li><a href="#" title="" onClick="myFunction()">Login</a></li></ul>
    </nav></div>
      <p>&nbsp;</p>
      <p>
			<script>
         function myFunction() 
         {
         var myWindow = window.open("login.php","", "width=1750,height=900, align=center");
         }
            </script>
      </p></td>
  </tr>
  </table>
  </div>
	<!-- Container / End -->
 </p></section>
 </div> 
</header>
  <!-- Header End -->
  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="space40">
        <form name="form1" method="post" action="">
        </form>
        
      </div>        
      <!-- Our Clients -->
      <div class="row">
        <div class="span12">
         <!-- <p class="span12"> -->
         
         <table><tr><th class="headline">
       <?php
		if($linkid=='1')
		   {
			   echo "<h2 class='focushighlight'>News<br></h2>";
			  $queryone="SELECT * FROM news ORDER BY date DESC;";
			  $resultqueryone=mysql_query($queryone) or die("Error retrieving details");
			  echo "<ol>";
			  while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
			  {
				extract($row);
				echo "<li><center> <h3><b>$title</b><br></h3>
				<b><img src='img/news/$photo' style='width:50%;height:50%;'></b></center><br>
				<h6>Date: $date<br>
				Info: $info<br>
				Written By: $writtenby</h6>
				</li>";
				echo "<br>";
				echo "<hr>";
			  }
      		  echo "</ol>";
			} 
		 else if($linkid=='2')
		    {
			 include 'susun.php';
    		}
		 
		 else if($linkid=='3')
			{
			include 'teammm.php';
			}
		 else if($linkid=='4')
			{ 
			  include 'contactus.php';
			}		
		 else 
			{
			   include 'homebody.php';
			}
		?>
         
        </th></tr></table>
       <!-- </div> -->
      </div> 
      <div class="space50"></div> 
    </div>
     <div class="span5">
      <p> 
      <h6><a href="index.php">HOME</a> |<a href="?pageid=1"> NEWS</a> |<a href="?pageid=2"> RESEARCH PROJECT</a> |<a href="?pageid=3"> TEAM </a>| <a href="?pageid=4">CONTACT US</a></h6>
      </p>
     </div>
    </div>
  <!-- Content End -->
  <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="span5">
       
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7949.537865355951!2d114.89717219999999!3d4.978025200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbn!4v1462762095504" width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
        <div class="span3 offset3">
          <h3>ADDRESS</h3>
          Motion Analysis Lab (MAL), <br>
		  2 floor ,reasearch room Faculty Of Science,<br>
          Universiti Brunei Darussalam,<br>
          Jalan Tunku Link BE1410,<br>
          Brunei Darussalam<br>
          <br>
          <i class="icon-phone"></i>+673 2463001 EXT: 1783 & 1362<br>
          <i class="icon-envelope"></i><a href="mailto:arosha.senanayake@ubd.edu.bn">arosha.senanayake@ubd.edu.bn</a><br>    
        </div>
      </div>
      <div class="row">
        <div class="span6">
          <div class="logo-footer">
            Design by <a href="">ums intership student</a>
          </div>                       
        </div>
        <div class="span6 right">
          &copy; 2016. All rights reserved.
        </div>
      </div>
    </div>
     </footer>
    <!-- Footer End -->
    <!-- JavaScripts -->
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" defer src="js/jquery.flexslider.js"></script>
</body>

</html>
  