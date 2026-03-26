<?php
session_start();
header('Content-Type: application/json; charset=utf-8');

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'aims_db';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection Error' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT * FROM user_authentication WHERE email = ? AND password = ?');
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        echo json_encode(['success'=> true, 'email' => $email]);
        exit;
    }
    echo json_encode(['success' => false, 'error' => 'Invalid Username or Password']);
    
}

?>
