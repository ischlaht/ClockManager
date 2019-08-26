
<?php
    function reDirHomePage(){
        
        if(isset($_COOKIE['LoggedIn'])){
			if($_COOKIE['LoggedIn'] == true){
				header('location: ../HomePage/HomePage.php');
			}
        }
        
		elseif(isset($_SESSION['LoggedIn'])){
			if($_SESSION['LoggedIn'] == true){
				header('location: ../HomePage/HomePage.php');
			}
        }
	}
	reDirHomePage();//Found in login system
			
		require_once('../Index/LoginSystem.php');
		require_once('../Components/Statik/Header/Header.php');
?>


<!Doctype html>
		<head>
			<link rel="stylesheet" type="text/css" href="IndexStyle.css" />
		</head>

		<body>
			<script src="IndexController.js" type="text/javascript"></script>


				<div id="indexPage">
					<form id="loginSystem" ng-controller="LoginUser" method="POST" action="#">

						<div id="loginTitle">Login</div><!--Element TITLE-->

							<div class="infoRow">
								<label>Username :</label>
								<input type="text" id="userName" name ="UserName" ng-keyup="checkUserName()"/>
							</div>

							<div class="infoRow">
								<label>Password :</label>
								<input type="password" id="password" name="Password" ng-keyup="checkPassword()"/>
							</div>

								<div id="loginError">
									<?php echo $ERR; ?>
								</div>

							<label id="RememberMeCheckbox">
								<input id="indeterminate-checkbox" type="checkbox" name="RememberMe" value="true"/>
								<span>Remember Me</span>
							</label>
			
							<input type="submit" name="LoginUser" id="loginUser-btn" class="boxShadow" />

					</form><!--LoginSystem Container -->
				</div><!--indexPage Container-->
		</body>

	</html>