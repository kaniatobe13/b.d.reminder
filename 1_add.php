<!DOCTYPE html>
<html>
	<head>
		<title>BirthReminder</title>
		<link rel="stylesheet" type="text/css" href="css/author.css">
	
	</head>
	<body>
		<div id="wrapper">
		<!-- OPEN -->	
			<header id="masterhead"></header>
			<?php include ('pinNav.php');?>
		<!-- END -->		
			
		<!-- OPEN -->
			
				<h2>New Birth</h2>			
			<!-- <form class="form-inline"> -->
			<!-- 	<form method="post" action="02-Post-Results.php"> -->
				<!-- OPEN -->
				<div class="form-group">
					  <label for="dropDown">Add Image</label>
					  <input type="text" class="form-control" id="dropDown" name="dropDown" placeholder="Add Image">
					</div>
				<!-- END -->

				<!-- OPEN -->
					<div class="form-group">
					  <label for="nameMe">Name</label>
					  <input type="text" class="form-control" id="nameMe" name="nameMe" placeholder="Name">
					</div>
				<!-- END -->
				
				<!-- OPEN -->
					<div class="form-group">
					  <label for="age">Age</label>
					  <input type="text" class="form-control" id="age" name="nameMe" placeholder="Age">
					</div>
				<!-- END -->
				

				<!-- OPEN -->
				<div class="form-group">
					<label for="dropDown">Month</label> 
						<select class="form-control-d">
							<option>Jan</option>
							<option>Fed</option>
							<option>Mar</option>
							<option>Apr</option>
							<option>May</option>
							<option>Jun</option>
							<option>Jul</option>
							<option>Aug</option>
							<option>Sep</option>
							<option>Oct</option>
							<option>Nov</option>
							<option>Dec</option>
						</select>
				</div>	
					<div class="form-group">
						<label for="dropDown">Date</label>
						<select class="form-control-d">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option>29</option>
							<option>30</option>
							<option>31</option>
					</select>
				</div>



				<!-- END -->
			
				<!-- OPEN -->
				<div class="form-group-in">
					  <label for="nameMe">Quick Note</label>
					  <textarea class="form-control" rows="7"></textarea>
					</div>
				<!-- END -->
				<!-- OPEN -->
				<div class="form-group">
					<button type="submit" class="btn btn-info">Remind Me Please!</button>
					</div>
				<!-- END -->
				</form>
			
		<!-- END -->
		<footer>&copy;All Rights Reserved</footer>
		</div>
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/author.js"></script>
	</body>
</html>`