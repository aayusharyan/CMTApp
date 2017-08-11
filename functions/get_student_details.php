<?php
//NOTE: This will need to be changed when uploading to a Server!
require_once($_SERVER['DOCUMENT_ROOT'].'/CMTApp/config.php');

function get_student_details ($student_uid) {
    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM student_details WHERE uid=:uid");
        $stmt->bindParam("uid", $student_uid,PDO::PARAM_STR);
        $stmt->execute();
        $count=$stmt->rowCount();
        $data=$stmt->fetch(PDO::FETCH_OBJ);
        if($count)  {
            return ($data);
        }   else {
            header ('location: registrations');
        }
    }   catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}
?>