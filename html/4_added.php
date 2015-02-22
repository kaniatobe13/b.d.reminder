<?php 
	require('uniV.php');
	$pageTitle = 'Profile';
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $pageTitle; ?></title>
		<link rel="stylesheet" type="text/css" href="css/author.css">
	</head>
	<body>
		<div id="wrapper">
		<!-- OPEN -->	
			<header id="masterhead"></header>
			<?php include ('pinNav.php');?>
			
		<!-- END -->
		<!-- OPEN -->
			<div class="profile">
				
				<?php echo $_POST['naming']; ?><br>
				<?php echo $_POST['ages']; ?>, <br>
				<?php echo $_POST['datePicker']; ?>,<br>
		
				<?php echo $_POST['quickNote']; ?>
			</div>
		</div>
		<!-- END -->
		<footer>&copy;All Rights Reserved</footer>
		
		</div>
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/author.js"></script>
	</body>
</html>