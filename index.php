<!DOCTYPE html>
<html>
<head>
	<title>form validation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-xxxxxxx" crossorigin="anonymous">
	<link rel="stylesheet"href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css" integrity="sha384-xxxxxxx" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/all.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <script type="text/javascript" src="js/bootstrap.js"></script>
   <script type="text/javascript" src="fontawesome-free-5.15.4-web/js/all.js"></script>

</head>
<body onload="validation()">
	<div class="container-fluid bg-light">
		<div class="row bg-light">
			<div class="col-lg-12 bg-light">
				<div class="row justify-content-center bg-light">
					<div class="col-lg-4 col-md-5 col-ms-6 mb-3 pt-5 mt-5 bg-white">
					    <h3 class="text-primary align-self-center" style="margin-left:150px; ">Register</h3>
						<form method="post" class="form" id="form_validation">
							<div class="form-group" id="userName">
								<label class="form-label" for="username">Username:</label>
								<div class="input-group mb-3">
									<input id="username" class="form-control py-2" type="text" name="username" aria-label="Input field" aria-describedby="basic-addon2" required>
								
									
								</div>
									<ul>
										<li class="form-text fst-italic" id="charlenth1"><small> The username must contain at least 3 characters</small></li>
									</ul>
							</div>
							<div class="form-group" id="passWord">
								<label class="form-label" for="password">Password</label>
								<div class="input-group mb-3">
									<input type="password" name="password" id="password" class="form-control py-2 border-end-0 border" required>
									<span class="input-group-text bg-transparent border-start-0 border"><h6 id="pass1icon" class="text-primary"><i class="fas fa-eye-slash" id="show_pass" style="cursor: pointer;" onclick="hideShow()"></i></h6></span>
								</div>
								
								    <ul>
								    	<li class=" form-text fst-italic" id="charlenth2"><small>The password must be at least 8 character</small></li>
								    	<li class="form-text fst-italic" id="check1"><small>the password must contain none alpha-numerical characters @#!*$%</small></li>
								    	<li class="form-text fst-italic" id="check2"><small>the password must have at least a Capital letter</small></li>
								    </ul>
							</div>
							<div class="form-group" id="passConf">
								<label class="form-label" for="passwordconf">Confirm Password:</label>
								<div class="input-group mb-3">
									<input class="form-control border-end-0 border" type="text" name="confirmPassword" id="passwordconf" required>
									<span class="input-group-text bg-transparent border-start-0 border"><h6 id="passconficon" class="text-success"><i class="fas fa-eye-slash"></i></h6></span>
								</div>
								
								    <ul>
								    	<li class="form-text fst-italic" id="check3"><small> Must match the above password</small></li>
								    </ul>
							</div>
							<input name="submit" type="submit" class="btn btn-primary mb-2 float-end">
						</form>
					  
					</div>
				</div>
			</div>
		</div>
	</div>

	<script> 
		function hideShow() {
			var pass1 = document.getElementById("password");
			if (pass1.type == 'password') {
				pass1.type = 'text';
				document.getElementById("show_pass").classList.remove('fas fa-eye-slash');
				document.getElementById("show_pass").classList.add('fas fa-eye');
			}
			else{
				pass1.type = 'password';
				document.getElementById("show_pass").removeClass('fas fa-eye');
				document.getElementById("show_pass").addClass('fas fa-eye-slash');
			}
		}

		document.getElementById("form_validation").addEventListener('submit', function(event) {

			var passw1 = document.getElementById("password").value;
			var username = document.getElementById("username");
			var pass2 = document.getElementById("passwordconf").value;

			if (!validatePass(passw1)) {
				event.preventDefault();
				document.getElementById("password").classList.add('is-invalid');
				alert("please put a strong password!!");
			}
			else{
				document.getElementById("password").classList.remove('is-invalid');
			}
			if (username.value.length < 3) {
				event.preventDefault();
				document.getElementById("username").classList.add('is-invalid');
				alert("User another username!!");
			}
			else{
				document.getElementById("username").classList.remove('is-invalid');
			}
			if (pass2 != passw1) {
				event.preventDefault();
				document.getElementById("passwordconf").classList.add('is-invalid');
				alert("The two password must match!!");
			}
			else{
				document.getElementById("passwordconf").classList.remove('is-invalid');
			}
		});


		 function validation() {
		 	
			var usernameinput = document.getElementById("username");
			var passw1 = document.getElementById("password");
			var pass2div = document.getElementById("passConf");
			var pass2 = document.getElementById("passwordconf");
			var charlenth1 = document.getElementById("charlenth1");
			var charlenth2 = document.getElementById("charlenth2");
			var check1 = document.getElementById("check1");
			var check2 = document.getElementById("check2");
			var check3 = document.getElementById("check3");
			
			
			pass2div.style.visibility = "hidden";
			
			charlenth1.style.color = "red";
			charlenth2.style.color = "red";
			check1.style.color = "red";
			check2.style.color = "red";
			check3.style.color = "red";
			

			usernameinput.oninput = function() {
				if (usernameinput.value.length >= 3) {
					charlenth1.style.color = "green";
					
					document.getElementById("username").classList.remove('is-invalid');
					document.getElementById("username").classList.add('is-valid');
				}
				else{
					charlenth1.style.color = "red";
					
					document.getElementById("username").classList.add('is-invalid');
				}
			}

			passw1.oninput = function() {
				if (passw1.value != '') {
					pass2div.style.visibility = 'visible';
				}
				else{
					pass2div.style.visibility = 'hidden';
				}
				if (passw1.value.length >= 8) {
					charlenth2.style.color = "green";
				}
				else{
					charlenth2.style.color = "red";
				}
				if (validateSpecialCharacter(passw1.value)) {
					check1.style.color = "green";
					
				}else{
					check1.style.color = "red";
				}
				if (validateCapitalLetters(passw1.value)) {
					check2.style.color = "green";
				}else{
					check2.style.color = "red";
				}
				if (passw1.value != '' && passw1.value.length >= 8 && validateSpecialCharacter(passw1.value) && validateCapitalLetters(passw1.value) ){
					document.getElementById("password").classList.remove('is-invalid');
					document.getElementById("password").classList.add('is-valid');
				}
				else{
					document.getElementById("password").classList.add('is-invalid');
				}
				
			}

			pass2.oninput = function() {
				if (pass2.value == passw1.value) {
					check3.style.color = "green";
					document.getElementById("passwordconf").classList.remove('is-invalid');
					document.getElementById("passwordconf").classList.add('is-valid');
				}
				else{
					check3.style.color ="red";
					document.getElementById("passwordconf").classList.add('is-invalid');
				}
			}


		}
		function validateCapitalLetters(password) {
			var capitals = /[A-Z]/;
			return capitals.test(password);
		}
		function validateSpecialCharacter(password) {
			var specialcharacters = /[\W]/;
			return specialcharacters.test(password);
		}
		function validatePass(password) {
			var requirements = /^(?=.*[A-Z])(?=.*[\W])(?=.{8,})/;
			return requirements.test(password);
		}
	</script>

</body>
</html>