<?php 
require("../Config.Files/Config.php/Main.Config.php");

// initualizing classes
    $UniversalControllers = new UniversalControllers();

// Controller to call desired function
        //Getting account information and sending through angular.
    if(isset($_GET['VariableSetter'])){
        $UniversalControllers->getAccountInfo();
    }
        // Updating Personal Account
    if(isset($_GET['UpdateAccount'])){
        $UniversalControllers->updateUserAccount();
    }






// ------------------------------------------------------------------------------
// ------------------------------------------------------------------------------
// ------------------------------------------------------------------------------
// ------------------------------------------------------------------------------
// ------------------------------------------------------------------------------

    class UniversalControllers{
        
        function getAccountInfo(){

                if(isset($_COOKIE['UserName'])){
                    $userID = $_COOKIE['UserID'];
                    $userName = $_COOKIE['UserName'];
                    $firstName = $_COOKIE['FirstName'];
                    $lastName = $_COOKIE['LastName'];
                    $canUpload = $_COOKIE['CanUpload'];
                    $canDownload = $_COOKIE['CanDownload'];
                    $isAdmin = $_COOKIE['IsAdmin'];
                    $isBanned = $_COOKIE['IsBanned'];
                    $powerBan = $_COOKIE['PowerBan'];
                    $powerGiveAdmin = $_COOKIE['PowerGiveAdmin'];
                    $powerDeleteAdmin = $_COOKIE['PowerDeleteAdmin'];
                    $powerAddUser = $_COOKIE['PowerAddUser'];
                    $powerDeleteUser = $_COOKIE['PowerDeleteUser'];
                    $powerEditData = $_COOKIE['PowerEditData'];
                    $powerDeleteData = $_COOKIE['PowerDeleteData'];
                }

                elseif(isset($_SESSION['UserName'])){
                    $userID = $_SESSION['UserID'];
                    $userName = $_SESSION['UserName'];
                    $firstName = $_SESSION['FirstName'];
                    $lastName = $_SESSION['LastName'];
                    $canUpload = $_SESSION['CanUpload'];
                    $canDownload = $_SESSION['CanDownload'];
                    $isAdmin = $_SESSION['IsAdmin'];
                    $isBanned = $_SESSION['IsBanned'];
                    $powerBan = $_SESSION['PowerBan'];
                    $powerGiveAdmin = $_SESSION['PowerGiveAdmin'];
                    $powerDeleteAdmin = $_SESSION['PowerDeleteAdmin'];
                    $powerAddUser = $_SESSION['PowerAddUser'];
                    $powerDeleteUser = $_SESSION['PowerDeleteUser'];
                    $powerEditData = $_SESSION['PowerEditData'];
                    $powerDeleteData = $_SESSION['PowerDeleteData'];
                }

                        $data = new stdClass();
                        $data->UserID = $userID;
                        $data->UserName = $userName;
                        $data->FirstName = $firstName;
                        $data->LastName = $lastName;
                        $data->CanUpload = $canUpload;
                        $data->CanDownload = $canDownload;
                        $data->IsAdmin = $isAdmin;
                        $data->IsBanned = $isBanned;
                        $data->PowerBan = $powerBan;
                        $data->PowerGiveAdmin = $powerGiveAdmin;
                        $data->PowerDeleteAdmin = $powerDeleteAdmin;
                        $data->PowerAddUser = $powerAddUser;
                        $data->PowerDeleteUser = $powerDeleteUser;
                        $data->PowerEditData = $powerEditData;
                        $data->PowerDeleteData = $powerDeleteData;
                            echo json_encode($data);
            }





















            // -----------------------------------------------------------------------------------
            // -----------------------------------------------------------------------------------
            // -----------------------------------------------------------------------------------
            // -----------------------------------------------------------------------------------
            // -----------------------------------------------------------------------------------

            function updateUserAccount(){

                $edit = $_POST['Edit'];
                $newValue = $_POST['newValue'];

                $UpdateError = false;
                // $messageChar = null;
                // $messageLength = null;

                $submitError = false;
                $data = array();

                    if($edit == '$UserName'){ 
                        
                        if (!preg_match('/^[a-zA-Z0-9]+$/', $newValue) && strlen($newValue) != 0){
                            $data['messageChar'] = "*Username must contain only Letters and Numbers.";
                            $submitError = true;
                        }
                        
                        // if(strlen($newValue) == 0){
                        // if($newValue == ' '){
                        //     $data['messageLength'] = "Username must be 4-20 characters.";
                        //     $submitError = true;
                        // }
                        if(strlen($newValue) < 4){
                            $data['messageLength'] = "*Username must be 4-20 characterssssss.";
                            $submitError = true;
                        }

                        if( strlen($newValue) < 4 || strlen($newValue) > 20){
                            $data['messageLength'] = "*Username must be 4-20 characters.";
                            $submitError = true;
                        }
                   
                        elseif($submitError == false){
                            $CheckUsernameQuery = "SELECT userName FROM useraccounts WHERE userName = ?";

                                if($UsernameCheckstmt = $GLOBALS['DBConnection']->prepare($CheckUsernameQuery)){
                                    $UsernameCheckstmt->bind_param('s', $newValue);
                                    $UsernameCheckstmt->execute();
                                    $UsernameCheckstmt->store_result();
                                    $rows = $UsernameCheckstmt->num_rows;

                                      
                                        if($rows != 0){
                                            $data['messageAvailability'] = "Username is taken, please choose another.";
                                        }
                                        elseif($rows == 0){
                                            $data['messageAvailability'] = "Username is available";
                                        }

                                }
                        }
                            
                            echo json_encode($data);


                    }
            }   
    }

                            
                            // wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
                            // wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
                            // wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
                            // wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
         
            // wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
            // wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
            // wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
            // wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww





























//             $data = array('Id'=>$id, 'UserName'=>$userName);
//             $setData[] = $data; -->
?>

