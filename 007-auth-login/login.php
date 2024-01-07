<?php
// File: login.php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"));

    if (isset($data->email) && isset($data->password)) {
        $auth = new Auth();

        if ($auth->login($data->email, $data->password)) {
            echo json_encode(array('status' => 'success', 'message' => 'Login berhasil'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Login gagal'));
        }
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Email dan password diperlukan'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Metode request tidak valid'));
}