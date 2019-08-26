<?php
    //Code and programming created, developed, and all rights owned by Isaac Schlaht @ King Systems Development.
    




    require_once("../Config.Files/Config.php/Main.Config.php");//Server Config file



// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------

    // Error Handlers
    $ERR = ""; // ERR is displayed to user on login screen
    $loginError = false;//Used to stop from loging in if error occurs

    $UserName = '';
    $Password = '';

// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------------------


    if(isset($_POST['LoginUser'])){

        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];


            if (!preg_match('/^[a-zA-Z0-9]+$/', $UserName)){
                $ERR = "Invalid Username or Password character(s).";
                $loginError = true;
            }
            

            elseif (!preg_match('/^[a-zA-Z0-9]+$/', $Password)){
                $ERR = "Invalid Username or Password character(s).";
                $loginError = true;
            }

            
            elseif($loginError == false){
                $LoginQuery = "SELECT $DBTotalDataArray FROM $DBTableUserAccounts WHERE userName = ? && password = ?";

                    if($LoginCheckstmt = $DBConnection->prepare($LoginQuery)){
                        $LoginCheckstmt->bind_param('ss', $UserName, $Password);
                        $LoginCheckstmt->execute();
                        $LoginCheckstmt->store_result();
                        $rows = $LoginCheckstmt->num_rows;

                            if($rows != 0){
                                mysqli_stmt_bind_result($LoginCheckstmt, 
                                    $SchemeID, 
                                    $SchemeUserName, 
                                    // $SchemePassword, 
                                    $SchemeFirstName, 
                                    $SchemeLastName, 
                                    $SchemePhoneNumber, 
                                    $SchemeIsBanned, 
                                    $SchemeIsAdmin, 
                                    $SchemePowerBan, 
                                    $SchemePowerViewHours, 
                                    $SchemePowerEditHours, 
                                    $SchemePowerAddUser, 
                                    $SchemePowerDeleteUser, 
                                    $SchemePowerGiveAdmin, 
                                    $SchemePowerDeleteAdmin, 
                                    $SchemePowerDeleteData,
                                    $SchemePowerEditData,
                                    $SchemeSuperUser,                                     
                                    $SchemeAccountCreated, 
                                    $SchemePaystubDelivery,
                                    $SchemeAccountType
                                );

                                mysqli_stmt_fetch($LoginCheckstmt);//Has to come after bind result above^^^
                                    $userID             = $SchemeID;
                                    $userName           = $SchemeUserName;
                                    // $password        = $SchemePassword;
                                    $firstName          = $SchemeFirstName;
                                    $lastName           = $SchemeLastName;
                                    $phoneNumber        = $SchemePhoneNumber;
                                    $isBanned           = $SchemeIsBanned;
                                    $isAdmin            = $SchemeIsAdmin;
                                    $powerBan           = $SchemePowerBan;
                                    $powerViewHours     = $SchemePowerViewHours;
                                    $powerEditHours     = $SchemePowerEditHours;
                                    $powerAddUser       = $SchemePowerAddUser;
                                    $powerDeleteUser    = $SchemePowerDeleteUser;
                                    $powerGiveAdmin     = $SchemePowerGiveAdmin;
                                    $powerDeleteAdmin   = $SchemePowerDeleteAdmin;
                                    $powerDeleteData    = $SchemePowerDeleteData;
                                    $powerEditData      = $SchemePowerEditData;
                                    $superUser          = $SchemeSuperUser;
                                    $accountCreated     = $SchemeAccountCreated;
                                    $paystubDelivery    = $SchemePaystubDelivery;
                                    $accountType        = $SchemeAccountType;
                                    
                                        if($isBanned == 'false'){ //Check to see if user is banned or not
                                            
                                            if(!empty($_POST['RememberMe'])){
                                                setcookie('LoggedIn',           true,               time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('UserID',             $userID,            time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('UserName',           $userName,          time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('Password',           true,               time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('FirstName',          $firstName,         time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('LastName',           $lastName,          time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PhoneNumber',        $phoneNumber,       time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('IsBanned',           $isBanned,          time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('IsAdmin',            $isAdmin,           time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerBan',           $powerBan,          time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerViewHours',     $powerViewHours,    time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerEditHours',     $powerEditHours,    time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerAddUser',       $powerAddUser,      time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerDeleteUser',    $powerDeleteUser,   time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerGiveAdmin',     $powerGiveAdmin,    time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerDeleteAdmin',   $powerDeleteAdmin,  time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerDeleteData',    $powerDeleteData,   time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PowerEditData',      $powerEditData,     time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('SuperUser',          $superUser,         time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('AccountCreated',     $accountCreated,    time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('PaystubDelivery',    $paystubDelivery,   time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);
                                                setcookie('AccountType',        $AccountType,       time() + 60*60*24*365, '/', $GLOBALS['Cookie'], false);

                                                    header('location: ../HomePage/HomePage.php');
                                            }
                                            
                                            elseif(empty($_POST['RememberMe'])){
                                                $_SESSION['LoggedIn']           = true;
                                                $_SESSION['UserID']             = $userID;
                                                $_SESSION['UserName']           = $userName;
                                                $_SESSION['Password']           = true;
                                                $_SESSION['FirstName']          = $firstName;
                                                $_SESSION['LastName']           = $lastName;
                                                $_SESSION['PhoneNumber']        = $phoneNumber;
                                                $_SESSION['IsBanned']           = $isBanned;
                                                $_SESSION['IsAdmin']            = $isAdmin;
                                                $_SESSION['PowerBan']           = $powerBan;
                                                $_SESSION['PowerViewHours']     = $powerViewHours;
                                                $_SESSION['PowerEditHours']     = $powerEditHours;
                                                $_SESSION['PowerAddUser']       = $powerAddUser;
                                                $_SESSION['PowerDeleteUser']    = $powerDeleteUser;
                                                $_SESSION['PowerGiveAdmin']     = $powerGiveAdmin;
                                                $_SESSION['PowerDeleteAdmin']   = $powerDeleteAdmin;
                                                $_SESSION['PowerDeleteData']    = $powerDeleteData;
                                                $_SESSION['PowerEditData']      = $powerEditData;
                                                $_SESSION['SuperUser']          = $superUser;
                                                $_SESSION['AccountCreated']     = $accountCreated;
                                                $_SESSION['PaystubDelivery']    = $paystubDelivery;
                                                $_SESSION['AccountType']        = $accountType;

                                                    header('location: ../HomePage/HomePage.php');
                                            }
                                        }

                                        else{ 
                                            $ERR = "You have been banned, contact an admin for further assistance.";
                                        }
                            }

                            else{
                                $ERR = "Wrong Username/Password!";

                                setcookie('LoggedIn', false, time() + 60*60*24*365, '/', $Cookie, false);
                                setcookie('Password', false,  time() + 60*60*24*365, '/', $Cookie, false);
                                $_SESSION['LoggedIn'] = false;
                                $_SESSION['Password'] = false;
                            }
                    }

                    else{ 
                        echo "<script>alert('[Server Error --> Prepared Stmt Failed {Code: LS30}] Contact King Systems Development(307-321-6559), for assistance!');</script>";
                    }
                    mysqli_stmt_close($LoginCheckstmt);
            }
    }
?>