<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>JustASSK</title>
	<link rel="icon" href="../images/title_icon.jpeg" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../..//css/content_display.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script src="https://apis.google.com/js/platform.js"></script>


	<style type="text/css">
		#yt
		{
			margin-top: 50px;
		}

		#sidebarleftmenu
		{
				
		}

		body
		{
			

		}



		#mainpagecontent
		{
			background-color: white;
			margin-top: 80px;
			height: auto;
			box-shadow: 5px 5px 5px 5px #ccc; 
			border-color: #ccc;


		}
		.content
		{
			color: black !important;
		}

	</style>
</head>
<body>
		
	<nav class="navbar navbar-inverse navbar-fixed-top" style="height: 80px;">
		<div class="container">
			<div class="navbar-header">
			
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>
<?php $quize_course_name=$_GET['course_name']; ?>
				<h1 style="color: white;margin-top: 10px;" id="myhead">JustASSK</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="http://localhost/Justassk/online_quize/quizhome.php?course_name=<?php echo $quize_course_name ?>">Start Test</a></li>
			<!--	<li> <a href="" id="our-location" class="btn-success" data-target="#mymodal" data-toggle="modal"><//?php echo $_SESSION['full_name'];?></a></li> -->
				</ul>
	                 
			</div>
		</div>
	</nav>

		

	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">
			<li><a href="" class="crossbutton" onclick="closesidemenu()">&times;</a></li>
			<li style="background-color :orangered;"><a href="../../welcome.php">BACK TO COURSES</a></li>

<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'learning');
$course_name=$_GET['course_name'];

//$_GET['course_name'];
// unset($_GET['course_name']);
$q="select * from courses where course_name='$course_name'";
$result=mysqli_query($con,$q);
while ($res=mysqli_fetch_array($result)) {
  ?>
		
  			<form action="fetch_main_content.php" method="POST">

  			<input type="hidden" name="txt1" value="<?php echo $res['id'] ?>">
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><li style="width: 300px;"><?php echo $res['topic_name']; ?></li></button>

			</form>
			

<?php } ?>

		</ul>
	</div>

		
<div id="mainpagecontent" class="shadow">
		
		<div class="content">
			<p>

			<?php

			if (isset($_SESSION['message'])) {
				echo $_SESSION['message'];
			}

			  ?>
			</p>
		
		</div>
			
		
	
	</div>


	
			
 <script type="text/javascript">
 	
 	var li=document.getElementsByTagName('li')[0].style="color:red";
 </script>

</body>
</html>