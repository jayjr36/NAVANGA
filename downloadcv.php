<?php

require_once 'dbconnection.php';

if (isset($_GET['id'])) {
    $userid = $_GET['id'];
    $sql = "SELECT cvurl FROM users WHERE email='$userid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cv_url = $row['cvurl'];
        if (file_exists($cv_url)) {
            header("Content-Type: application/octet-stream");
            header("Content-Transfer-Encoding: Binary");
            header("Content-disposition: attachment; filename=\"" . basename($cv_url) . "\"");
         
            readfile($cv_url);
            exit;
        } else {
            echo " <script>alert('File not found.')</script>";
        }
    } else {
        echo "<script>alert('User not found.')</script>";
    }
} else {
    echo "<script>alert('User ID not provided.')</script>";
}


