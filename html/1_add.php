<?php 
	require('uniV.php');
	$pageTitle = 'BirthReminder';
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
			<form class="myForm" method="post" action="2_viewAll.php">
				<h2 class="titleName">New Birth</h2>
				
				<div class="form-group">
				  <label for="nameing">Name</label>
				  <input type="text" class="form-control" id="naming" name="naming">
				</div>
				<div class="form-group">
				  <label for="ages">Age</label>
				  <input type="text" class="form-control" id="ages" name="ages">
				</div>
				
				  
				<div class="form-group">
				<label for="ages">Date</label>
				<input type="text" id="datepicker" name="datePicker">
				</div>
				<!-- <div class="form-group"> 
				  <label for="dropDown">Month</label> 
						<select type="date" class="form-control-d" id="dropDown" name="dropDown" placeholder="dropDownOne">
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
				  <select type="date" class="form-control-d" id="dropDown" name="dropDownTwo" placeholder="dropDownTwo">
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
				</div> -->

				<div class="form-group-in">
				<div class="form-group">
				  <label for="quickNote">Quick Note</label>
				  <input type="text"  class="form-control" id="quickNote" name="quickNote" placeholder="quickNote">
				</div>
					 <button type="submit" class="btn btn-default">Fun Time </button>
				</form>
		<!-- end -->
		
			
		<!-- END -->
		<footer>&copy;All Rights Reserved</footer>
		</div>
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/author.js"></script>
		<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
	</body>
</html>`