
<?php
//Code and programming created, developed, and all rights owned by Isaac Schlaht @ King Systems Development.


//////////////////Developer NOTES///////////////////////

######  DataBase Variables (Session has same variables)
            # 'LoggedIn',        
            # 'UserID',          
            # 'UserName',        
            # 'Password',        
            # 'FirstName',       
            # 'LastName',        
            # 'PhoneNumber',     
            # 'IsBanned',        
            # 'IsAdmin',         
            # 'PowerBan',        
            # 'PowerViewHours',  
            # 'PowerEditHours',  
            # 'PowerAddUser',    
            # 'PowerDeleteUser', 
            # 'PowerGiveAdmin',  
            # 'PowerDeleteAdmin',
            # 'PowerDeleteData', 
            # 'PowerEditData',   
            # 'SuperUser',       
            # 'AccountCreated',  
            # 'PaystubDelivery', 
            # 'AccountType',  
#######################################################




## $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false; 
## setcookie('UserName', 'settt', time()+120, '/', $domain, false);
## $GLOBALS['DBConnection'] = new mysqli($DBServer, $DBUserName, $DBPassword, $DBName); // Database Connection

//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||




######  Database Configuration
            $DBServer = "localhost";            #Server address.                                                                                     
            $DBUserName = "root";               #Server login.
            $DBPassword = "";                   #Server password.
            $DBName = "ClockManager";           #Server Database.
                $DBConnection = new mysqli($DBServer, $DBUserName, $DBPassword, $DBName); // Database Connection

                
######  Database Tables(SQL)
            $DBTableUserAccounts = "useraccounts"; # Server Table for all User Accounts.
            


###### ERROR if cannot connect to databse! (GLOBAL ERRORS)...
        if($DBConnection != true) {
            echo "Cannot connect to database";
        }
//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||
//||||--------------------------------------------------------------------------------------------||||



//////||||--------------------Varaibles that are located in server table "useraccounts". (GLOBAL)--------------------||||
        $DBID               = 'id';//1
        $DBUserName         = 'userName';//2
        $DBFirstName        = 'firstName';//4
        $DBLastName         = 'lastName';//5
        $DBPhoneNumber      = 'phoneNumber';//6
        $DBIsBanned         = 'isBanned';//7
        $DBIsAdmin          = 'isAdmin';//8
        $DBPowerBan         = 'powerBan';//9
        $DBViewHours        = 'powerViewHours';//10
        $DBEditHours        = 'powerEditHours';//11
        $DBPowerAddUser     = 'powerAddUser';//12
        $DBPowerDeleteUser  = 'powerDeleteUser';//13
        $DBPowerGiveAdmin   = 'powerGiveAdmin';//14
        $DBPowerDeleteAdmin = 'powerDeleteAdmin';//15
        $DBPowerDeleteData  = 'powerDeleteData';//16
        $DBPowerEditData    = 'powerEditData';//17
        $DBSuperUser        = 'superUser';//18
        $DBAccountCreated   = 'accountCreated';//19
        $DBPaystubDelivery  = 'paystubDelivery';//20
        $DBAccountType      = 'accountType';//21

######  Array of all Variables located in database.
        $DBTotalDataArray = "
            $DBID,
            $DBUserName,
            $DBFirstName,
            $DBLastName,
            $DBPhoneNumber,
            $DBIsBanned,
            $DBIsAdmin,
            $DBPowerBan,
            $DBViewHours,
            $DBEditHours,
            $DBPowerAddUser,
            $DBPowerDeleteUser,
            $DBPowerGiveAdmin,
            $DBPowerDeleteAdmin,
            $DBPowerDeleteData,
            $DBPowerEditData,
            $DBSuperUser,
            $DBAccountCreated,
            $DBPaystubDelivery,
            $DBAccountType
        ";

// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------

######  Cookie Configuration
        $GLOBALS['Cookie'] = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;

// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------

// END-----------------------------------------------------------------------------
// END-----------------------------------------------------------------------------
// END-----------------------------------------------------------------------------
// END-----------------------------------------------------------------------------



?>









