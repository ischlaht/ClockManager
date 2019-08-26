<?php
    function displayData($myData) {
        // $myData = 'UserName';
        if(isset($_COOKIE['LoggedIn']) || isset($_SESSION['LoggedIn'])){
                if(isset($_COOKIE[$myData])){
                    // echo $_COOKIE[$myData];
                    return $_SESSION[$myData];

                    
                }
                elseif(isset($_SESSION[$myData])){
                    // echo $_SESSION[$myData];
                    return $_SESSION[$myData];
                }
        }   
        else{
            echo "";
        }
        
    }

        // $isAdmin = displayData('IsAdmin');

?>
<title>Private Backup</title>
		<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="King Systems Development backup-server system">
	<meta name="author" content="Isaac Schlaht @ King Systems Development">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">

<!-- --------------------------------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------------------------- -->

	<!-- Dont forget to add minified to all CDN add-ons when production is coplete|||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

		<!-- jQuery CDN -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

		<!-- Anguular/maybe ajax??? CDN -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js"></script>
	<!-- <script type="text/javascript" src="../Library/angular/angular.js"></script> -->


		<!-- Angular animate CDN-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>

		<!-- For angular sanitize CDN-->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js"></script>

		<!-- Materialize CDN-->
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- --------------------------------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------------------------------------------------------- -->


<!-- <script src="../Library/angular1.6.7/Ng-Cookies/node_modules/angular-cookies/angular-cookies.js"></script> -->

<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">     -->

<!-- Popper.js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> -->

