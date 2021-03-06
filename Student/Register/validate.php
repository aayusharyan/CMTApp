<?php

require_once('config.php');


$password = $_POST['password'];
$email = $_POST['email'];
$name = $_POST['name'];
$number = $_POST['phone'];
$gender = $_POST['gender'];
$role = $_POST['role'];
$acad_year = $_POST['year'];
$branch = $_POST['branch'];
$college = $_POST['college'];
$domains = implode($_POST['checkbox'], ', ');


try{
    $db = getDB();
    
    $stmt = $db->prepare("INSERT INTO `student_details` (`email`, `name`, `password`, `phone`, `gender`, `role`, `academic_year`, `create_date`, `college`, `branch`, `domains`) VALUES (:email, :name, :password, :phonenumber, :gender, :role, :year, CURDATE(), :college, :branch, :domains  )");
    $stmt->bindParam("email", $email,PDO::PARAM_STR) ;
    $stmt->bindParam("name", $name,PDO::PARAM_STR) ;
    $stmt->bindParam("password", $password,PDO::PARAM_STR) ;
    $stmt->bindParam("phonenumber", $number,PDO::PARAM_STR) ;
    $stmt->bindParam("gender", $gender,PDO::PARAM_STR) ;
    $stmt->bindParam("role", $role,PDO::PARAM_STR) ;
    $stmt->bindParam("year", $acad_year,PDO::PARAM_STR) ;
    $stmt->bindParam("branch", $branch,PDO::PARAM_STR) ;
    $stmt->bindParam("college", $college,PDO::PARAM_STR) ;
    $stmt->bindParam("domains", $domains,PDO::PARAM_STR) ;
    $stmt->execute();
    
    if(count($_POST['checkbox'])!=1)
        $domains = "MUL";        
    $id = $db->lastInsertId();
    
    $db = null;
    $db = getDB();
    $ncollege = str_pad($college, 5, "0", STR_PAD_LEFT);
    $nid = str_pad($id, 4, "0", STR_PAD_LEFT); 
    $year = date("Y");
    $nyear = substr($year, -1);
    
    $UID = $role.$domains.$nyear.$ncollege.$nid;
   
    $stmt1 = $db->prepare("UPDATE `student_details` SET `uid`=:uid WHERE `id`=:id"); 
    $stmt1->bindParam(":uid", $UID,PDO::PARAM_STR) ;
    $stmt1->bindParam("id", $id,PDO::PARAM_STR) ;
    $stmt1->execute();
    
}
catch(PDOException $ae)
{
    echo $ae->getMessage();
}



?>