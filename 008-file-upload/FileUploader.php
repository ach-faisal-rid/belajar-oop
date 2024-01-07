<?php
// File: FileUploader.php
class FileUploader {
    private $uploadDir = "uploads/";

    public function upload($file) {
        // Implementasi upload file dengan pemeriksaan jenis dan ukuran
        // Periksa jenis file
        $allowedTypes = ['jpg', 'jpeg', 'png'];
        $fileInfo = pathinfo($file['name']);
        $fileExtension = strtolower($fileInfo['extension']);

        if (!in_array($fileExtension, $allowedTypes)) {
            return false; // Jenis file tidak diizinkan
        }

        // Periksa ukuran file
        if ($file['size'] > 1000000) {
            return false; // Ukuran file terlalu besar (contoh: 1MB)
        }

        // Generate nama file unik
        $uniqueFilename = $this->generateUniqueFilename($file['name']);

        // Pindahkan file ke direktori upload
        move_uploaded_file($file['tmp_name'], $this->uploadDir . $uniqueFilename);

        return true; // Upload berhasil
    }

    private function generateUniqueFilename($filename) {
        // Implementasi untuk menghasilkan nama file yang unik
        return uniqid() . '_' . $filename;
    }
}
