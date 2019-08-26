    <!-- Code and programming created, developed, and all rights owned by Isaac Schlaht @ King Systems Development. -->
<html lang="en">

        <head>
            <?php
                require_once('HeaderController.php'); 
                require_once('../Config.Files/Config.php/API.CDN.Config.php');
            ?>

            <link rel="stylesheet" type="text/css" href="../Components/Statik/Header/Header.css"/>
            <link rel="stylesheet" type="text/css" href="../Config.Files/Config.css/Global.Classes.css"/>
        </head>


        <body>
            <?php
                require_once('../Components/Statik/SideNav/SideNav.php');
            ?>

            <div id="header">
                <div id="headerTitle">ClockManager</div>
                        <!-- Logout button -->
                    <form method="POST" action="#">
                        <button id="logOut_btn" name="LogOut" class="boxShadow">Logout</input>
                    </form>
            </div>
        </body>
</html>