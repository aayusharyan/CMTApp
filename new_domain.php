<?php
require_once('config.php');
require_once('check_login.php');

$new_domain_name = $_POST['domain_name'];
$new_domain_shortname = $_POST['domain_short_name'];

$_SESSION['errorAddingDomain'] = false;

if (($new_domain_name != "") && ($new_domain_shortname != "") && (ctype_alpha($new_domain_shortname)) && (strlen($new_domain_shortname) == 3) && ($new_domain_shortname != "MU")) {
    try {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO domains (short_name, full_name) VALUES (:domain_short_name, :domain_full_name)");
        $stmt->bindParam("domain_short_name", $new_domain_shortname,PDO::PARAM_STR);
        $stmt->bindParam("domain_full_name", $new_domain_name,PDO::PARAM_STR);
        $stmt->execute();
    }   catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
        $_SESSION['errorAddingDomain'] = true;
    }
}   else {
    $_SESSION['errorAddingDomain'] = true;
}

header('location: domaininfo');


?>