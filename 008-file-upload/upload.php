<?php
// File: upload.php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pastikan pengguna telah login sebelum mengunggah file

    $fileUploader = new FileUploader();

    if ($fileUploader->upload($_FILES['file'])) {
        echo json_encode(array('status' => 'success', 'message' => 'File berhasil diunggah'));
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Gagal mengunggah file'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Metode request tidak valid'));
}