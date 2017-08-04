<?php
require ('config.php');

$usernameEmail = $_SESSION ['email'];
$isUserMatch = false;

try {
    $db = getDB();
    $hash_password= $password; //Password encryption 
    $stmt = $db->prepare("SELECT id FROM admin_details WHERE email=:usernameEmail"); 
    $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;
    $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
    $stmt->execute();
    $count=$stmt->rowCount();
    $data=$stmt->fetch(PDO::FETCH_OBJ);
    $db = null;
    if($count)  {
        if ($_SESSION['id'] == $data->id) {
            $isUserMatch = true;
        }
            
    }
} catch (PDOException e) {
    echo '{"error":{"text":'. $e->getMessage() .'}}';
}

if (!$isUserMatch) {
    $_SESSION['isLoginError'] = true;
    header ('location: index');
}

?>