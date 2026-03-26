<?php
require_once __DIR__ . '/../log-in-page/log-in-api.php';
header('Content-Type: application/json');

$email = $_SESSION['email'] ?? null;

if($email === null) {
    echo json_encode(["status"=>"not okay", "email"=>'null']);
    
}
else{
    echo json_encode(["status"=>"okay", "email"=>$email]);
}

?>