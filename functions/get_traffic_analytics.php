<?php
//NOTE: This will need to be changed when uploading to a Server!
require_once($_SERVER['DOCUMENT_ROOT'].'/CMTApp/config.php');

function get_traffic_analytics() {

    $return_obj = new stdClass();
    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM traffic_sessions");
        $stmt->execute();
        $count=$stmt->rowCount();
        $return_obj->total = $count;
        //return ($count);
    } catch (PDOException $e) {
        echo '{"error": {"text":'. $e->getMessage() .'}}';
    }

    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT COUNT(id) as count,visit_date FROM traffic_sessions GROUP BY visit_date ORDER BY visit_date DESC LIMIT 0, 12");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        $return_obj->data = $data;
        //print '<pre>'; print_r($data); print '</pre>';
    } catch (PDOException $e) {
        echo '{"error": {"text":'. $e->getMessage() .'}}';
    }


    return ($return_obj);
}
?>
