<!-- Code and programming created, developed, and all rights owned by Isaac Schlaht @ King Systems Development. -->



<head>
<link rel="stylesheet" type="text/css" href="../Components/Statik/SideNav/SideNav.css"/>
</head>

<body>

<?php

?>

            <ul id="slide-out" class="sidenav">

                <li>
                    <div class="user-view">
                        <div class="background">
                            <!-- <img src="images/office.jpg"> -->
                        </div>

                        <!-- <a href="#user"><img class="circle" src="images/yuna.jpg"></a> -->


                        <!-- <a href="#name"> -->
                        <div id="userName">
                            <?php 
                               echo displayData('UserName');
                            ?>
                        </div>

                        <div class="black-text" id="firstName">
                            <?php 
                                echo displayData('LastName');
                            ?>
                        
                        </div>

                        <div class="black-text" id="lastName">
                            <?php 
                                echo displayData('LastName');
                            ?>
                        </div>


                        <!-- <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a> -->
                    </div>
                </li>


                <li><a href="../HomePage/HomePage.php"><i class="material-icons">cloud</i>Home Page</a></li>
                <?php 
                        if(displayData('IsAdmin') === 'true'){
                            echo 'isAdmin';
                        }
                    else{
                        echo "nopppee";
                    }
                ?>
                <li><a href="../AdminSystem/AdminSystem.php"><i class="material-icons">group</i>Admin Panel</a></li>
                <li><div class="divider black"></div></li>
                <li><a class="Preferences"></a></li>
                <li><a class="waves-effect" href="#!"><i class="material-icons">build</i>Settings</a></li>
            </ul>


    <a href="#" data-target="slide-out" id="sidenav-menu-btn" class="sidenav-trigger"><i class="material-icons" id="sidenav-menu-icon">menu</i><ul>MENU</ul></a>

    <script>
    


        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init();
        });

        // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
        // var collapsibleElem = document.querySelector('.collapsible');
        // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

        // Or with jQuery

        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
</script>
</body>