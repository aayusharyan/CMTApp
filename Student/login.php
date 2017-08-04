<?php

require('config.php');

$password = $_POST ['login_password'];
$usernameEmail = $_POST ['login_email'];
$isUserMatch = false;

try {
    $db = getDB();
    $hash_password= $password; //Password encryption 
    $stmt = $db->prepare("SELECT * FROM student_details WHERE email=:usernameEmail AND password=:hash_password"); 
    $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;
    $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
    $stmt->execute();
    $count=$stmt->rowCount();
    $data=$stmt->fetch(PDO::FETCH_OBJ);
    $db = null;
    if($count)  {
        $_SESSION['name']=$data->name; // Storing user session value
        $isUserMatch = true;
    }
}   catch(PDOException $e) {
    echo '{"error":{"text":'. $e->getMessage() .'}}';
}

if ($isUserMatch) {
    header('location: dashboard');
} else {
    //$_SESSION['isLoginError'] = true;
    //header ('location: index');
}



?>