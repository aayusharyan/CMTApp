<?php
require_once('config.php');
require_once('check_login.php');

$new_college_name = $_POST['college_name'];
$new_college_shortname = $_POST['college_short_name'];
$new_college_code = $_POST['college_code'];

$_SESSION['errorAddingCollege'] = false;

if (($new_college_name != "") && ($new_college_shortname != "")) {
    try {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO colleges (code, short_name, full_name) VALUES (:college_code, :college_short_name, :college_full_name)");
        $stmt->bindParam("college_code", $new_college_code,PDO::PARAM_STR);
        $stmt->bindParam("college_short_name", $new_college_shortname,PDO::PARAM_STR);
        $stmt->bindParam("college_full_name", $new_college_name,PDO::PARAM_STR);
        $stmt->execute();
    }   catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
        $_SESSION['errorAddingCollege'] = true;
    }
}   else {
    $_SESSION['errorAddingCollege'] = true;
}

header('location: collegeinfo');


?>