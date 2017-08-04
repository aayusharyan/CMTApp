<?php
//NOTE: This will need to be changed when uploading to a Server!
require_once($_SERVER['DOCUMENT_ROOT'].'/CMTApp/config.php');

function get_total_users ($detailed = false) {
    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM student_details");
        $stmt->execute();
        $count=$stmt->rowCount();
        //return ($count);
    } catch (PDOException $e) {
        echo '{"error": {"text":'. $e->getMessage() .'}}';
    }
    
    if ($detailed) {
        try {
            $db = getDB();
            $stmt = $db->prepare("SELECT COUNT(id) as count,create_date FROM student_details GROUP BY create_date ORDER BY create_date DESC LIMIT 0, 2");
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            print '<pre>'; print_r($data); print '</pre>';
        } catch (PDOException $e) {
            echo '{"error": {"text":'. $e->getMessage() .'}}';
        }
        
    }
    
}
get_total_users (true);
?>