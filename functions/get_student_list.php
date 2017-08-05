<?php
//NOTE: This will need to be changed when uploading to a Server!
require_once($_SERVER['DOCUMENT_ROOT'].'/CMTApp/config.php');

function get_student_list () {
    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM student_details");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return ($data);
    } catch (PDOException $e) {
        echo '{"error": {"text":'. $e->getMessage() .'}}';
    }
}



?>