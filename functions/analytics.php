<?php
//NOTE: This might need to be changed when uploading on Server
require_once($_SERVER['DOCUMENT_ROOT'].'/CMTApp/config.php');
$isNewSession = true;

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // request 30 minates ago
    session_destroy();
    session_unset();
} else {
    $isNewSession = false;
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time
$user_ip = getRealIpAddr();

if ($isNewSession) {
    try {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO traffic_sessions (from_ip, visit_date) VALUES (:visitor_ip, CURDATE())");
        $stmt->bindParam("visitor_ip", $user_ip,PDO::PARAM_STR);
        $stmt->execute();
    }   catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

$requested_page = $_SERVER['REQUEST_URI'];
try {
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO visit_sessions (from_ip, visit_date, page_visited) VALUES (:visitor_ip, CURDATE(), :page_visited)");
    $stmt->bindParam("visitor_ip", $user_ip,PDO::PARAM_STR);
    $stmt->bindParam("page_visited", $requested_page,PDO::PARAM_STR);
    $stmt->execute();
}   catch(PDOException $e) {
    echo '{"error":{"text":'. $e->getMessage() .'}}';
}



function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

?>