<!DOCTYPE html>
<html>
<head>
	<?php include('../header.php'); ?>
</head>
<body>
	<div class="container">
		<div class="page" id="register-page">
			<form action="" name="signup_form" id="signup_form" class="standard-form" method="post" enctype="multipart/form-data">
			<h2>Create an Account</h2>
			<p>Registering for this site is easy, just fill in the fields below and we'll get a new account set up for you in no time.</p>
			
			<div class="register-section" id="basic-details-section">
			<h4>Account Details</h4>
				<div class="form-group">
					<label for="signup_email">Email Address</label>
					<input type="text" name="signup_email" id="signup_email" value="">
				</div>
				<div class="form-group">
					<label for="signup_password">Choose a Password</label>
					<input type="password" name="signup_password" id="signup_password" value="">
				</div>
				<div class="form-group">
					<label for="signup_password_confirm">Confirm Password</label>
					<input type="password" name="signup_password_confirm" id="signup_password_confirm" value="">
				</div>
			</div><!-- #basic-details-section -->

			<div class="register-section" id="profile-details-section">
				<h4>Profile Details</h4>
				<div class="editfield">
				<label for="field_1">Name</label>
				<input type="text" name="field_1" id="field_1" value="">
				<p class="description"></p>
			</div>
			
			<div class="editfield">
				<label for="field_6">School ID Number</label>
				<input type="text" name="field_6" id="field_6" value="">
				<p class="description"></p>
			</div>
			
			<div class="editfield">
				<label for="field_7">Gender</label>
				<select name="field_7" id="field_7">
				<option value="Male">Male</option><option value="Female">Female</option>									</select>
				<p class="description"></p>
			</div>
			
			<div class="editfield">
				<div class="datebox">
					<label for="field_9_day">Birthday</label>
					<select name="field_9_day" id="field_9_day">
						<option value="" selected="selected">--</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
					</select>

					<select name="field_9_month" id="field_9_month">
						<option value="" selected="selected">------</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option>
					</select>

					<select name="field_9_year" id="field_9_year">
						<option value="" selected="selected">----</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option>
					</select>
				</div>
				
				<p class="description"></p>
			</div>
			
			<div class="editfield">
				<label for="field_12">Race </label>
				<select name="field_12" id="field_12">
				<option value="">----</option><option value="White">White</option><option value="Black">Black</option><option value="Asian or Pacific Islander">Asian or Pacific Islander</option><option value="American Indians">American Indians</option><option value="Mixed ">Mixed </option><option value="Unknown">Unknown</option>									</select>
			<p class="description"></p>
			</div>
			
			<input type="hidden" name="signup_profile_field_ids" id="signup_profile_field_ids" value="1,6,7,9,12">
		</div><!-- #profile-details-section -->

		<div class="submit">
			<input type="submit" name="signup_submit" id="signup_submit" value="Complete Sign Up">
		</div>
		</form>
	</div>
	
</body>


</html>