<?php
session_start();
@include '../model/config.php';
@include '../model/AdoptModel.php';

if (isset($_POST['submit'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['full-name']);
    $contact  = mysqli_real_escape_string($conn, $_POST['contact']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $address  = mysqli_real_escape_string($conn, $_POST['address']);

    // Insert into database
    $result = insertAdoptInfo($conn, $fullname, $contact, $email, $address);

    if ($result) {
        $_SESSION['success'] = "Adoption request submitted successfully!";
        header("location: ../view/adopt.php");
        exit;
    } else {
        $_SESSION['error'] = "Failed to submit adoption request.";
        header("location: ../view/adopt.php");
        exit;
    }
}
?>
