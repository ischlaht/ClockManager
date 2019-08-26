<!-- Code and programming created, developed, and all rights owned by Isaac Schlaht @ King Systems Development. -->


<!-- Made by Isaac Schlaht -->

<?php

function reDirIndex(){
    if(!isset($_COOKIE['UserName']) && !isset($_SESSION['UserName'])){
            header('location: ../Index/Index.php');
        }
}
reDirIndex();

    require_once("../Components/Statik/Header/Header.php");
    // require_once("./AdminController.php");
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./AdminSystem.css"/>    
        <script type="text/javascript" src="./AdminController.js"></script>
    </head>



    <body  >
    <!-- --------------Move Controller here to insert  ng-click='EditUserName = !EditUserName' onto the class and close during defualt -->
        <div id="AdminSystem">

            <ul class="collapsible">
<!-- .................................................................................................................. -->
                    <!-- <li> -->
                <li class="active">
                    <div class="collapsible-header"><i class="material-icons" >assignment_ind</i>My Account</div>

                        <div class="collapsible-body" id="myAccountListing">
                            <div ng-controller="EditAccount" ng-init="InitAccountListing()">


                                <!-- Personal Account Information -->
                                <div class="row">
                                    <label id="accountUsernamelabel" class="accountLabel">Username: </label>
                                        <div id="accountUsername" class="accountInfo">{{Records.UserName}}</div>
                                                <!-- ------------asdasdadsadsfadsfadsfasdfadsfadsfadsfadsfadsfasdfadsfasdfadsfasfadsfadfadfasdfasdf -->
                                                <!-- ------------asdasdadsadsfadsfadsfasdfadsfadsfadsfadsfadsfasdfadsfasdfadsfasfadsfadfadfasdfasdf -->
                                                <!-- ------------asdasdadsadsfadsfadsfasdfadsfadsfadsfadsfadsfasdfadsfasdfadsfasfadsfadfadfasdfasdf -->
                                                <!-- ------------asdasdadsadsfadsfadsfasdfadsfadsfadsfadsfadsfasdfadsfasdfadsfasfadsfadfadfasdfasdf -->

                                                
                                                
                                                <button class="edit_Btn" ng-click='EditUserName = !EditUserName'>Edit</button>
                                                    <form method="POST" ng-show="EditUserName">
                                                        <input ng-model="EditAccountValue" type="text" placeholder="Enter Username here." class="editAccountBox"/>
                                                        <button class="editAccountSubmit_btn" ng-click="EditAccount('$UserName')">Submit Change</button>

                                                            <i>
                                                                <div id="updateAccountMessage">{{UpdateAccountMessage.messageLength}}</div>
                                                                <div id="updateAccountMessage">{{UpdateAccountMessage.messageChar}}</div>
                                                                <div id="updateAccountMessage">{{UpdateAccountMessage.messageAvailability}}</div>
                                                            </i>

                                                    </form>
                                                    

                                                    

                                                <!-- ------------asdasdadsadsfadsfadsfasdfadsfadsfadsfadsfadsfasdfadsfasdfadsfasfadsfadfadfasdfasdf -->
                                                <!-- ------------asdasdadsadsfadsfadsfasdfadsfadsfadsfadsfadsfasdfadsfasdfadsfasfadsfadfadfasdfasdf -->
                                                <!-- ------------asdasdadsadsfadsfadsfasdfadsfadsfadsfadsfadsfasdfadsfasdfadsfasfadsfadfadfasdfasdf -->
                                                <!-- ------------asdasdadsadsfadsfadsfasdfadsfadsfadsfadsfadsfasdfadsfasdfadsfasfadsfadfadfasdfasdf -->
                                </div>


                                




                                <div class="row">
                                    <label id="accountFirstnamelabel" class="accountLabel">Firstname: </label>
                                        <div id="accountFirstname" class="accountInfo">{{Records.FirstName}}</div>

                                            <button class="edit_Btn" ng-click="TrueSetter()">Edit</button>
                                            <input ng-if="TrueSet" type="text" class="editAccountBox"/>
                                </div>






                                <div class="row">
                                    <label id="accountLastnamelabel" class="accountLabel">Lastname: </label>
                                        <span id="accountLastname" class="accountInfo">{{Records.LastName}}</span>
                                </div>



                                    <!-- Basic permissions -->
                                <div class="row">
                                    <label id="accountCanUploadlabel" class="accountLabel">Permission to upload: </label>
                                        <span id="accountCanUpload" class="accountInfo">{{Records.CanUpload}}</span>
                                </div>
                            
                                <div class="row border-bottom">
                                    <label id="accountCanDownloadlabel" class="accountLabel">Permission to download: </label>
                                        <span id="accountCanDownload" class="accountInfo">{{Records.CanDownload}}</span>
                                </div>

                                

                                        <!-- Only for Admins Permissions -->
                                    <div id="showAdminDetailsLabel">Admin Details</div>
                                    

                                        <div class="row">
                                            <label id="adminGiveAdminlabel" class="accountLabel">Permission to Create Admins: </label>
                                            <span id="adminGiveAdmin" class="accountInfo">{{Records.PowerGiveAdmin}}</span>
                                        </div>
                                        
                                        <div class="row">
                                            <label id="adminDeleteAdminlabel" class="accountLabel">Permission to Delete Admins: </label>
                                            <span id="adminDeleteAdmin" class="accountInfo">{{Records.PowerDeleteAdmin}}</span>
                                        </div>





                                            <div ng-if="ShowAdminDetails">

                                                    <div class="row">
                                                        <label id="adminPermissionBanlabel" class="accountLabel">Permission to Ban Users: </label>
                                                        <span id="adminPermissionBan" class="accountInfo">{{Records.PowerBan}}</span>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <label id="adminAddUserlabel" class="accountLabel">Permission to Create New Users: </label>
                                                        <span id="adminAddUser" class="accountInfo">{{Records.PowerAddUser}}</span>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <label id="adminDeleteUserslabel" class="accountLabel">Permission to Delete Users: </label>
                                                        <span id="adminDeleteUsers" class="accountInfo">{{Records.PowerDeleteUser}}</span>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <label id="adminEditDatalabel" class="accountLabel">Permission to EditData: </label>
                                                        <span id="adminEditData" class="accountInfo">{{Records.PowerEditData}}</span>
                                                    </div>
                                                    
                                                    <div class="row border-bottom">
                                                        <label id="adminDeleteDatalabel" class="accountLabel">Permission to Delete Data: </label>
                                                        <span id="adminDeleteData" class="accountInfo">{{Records.PowerDeleteData}}</span>
                                                    </div>
                                                    
                                            </div>
                            </div><!--for Controller -->
                    </div>
                </li>
<!-- .................................................................................................................. -->


                <!-- <li class="active"> -->
                <li>
                    <div class="collapsible-header"><i class="material-icons">assignment</i>Register a new Account or Admin</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
<!-- .................................................................................................................. -->



                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Edit Admins</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
<!-- .................................................................................................................. -->
            </ul>
        </div>
    </body>




</html>