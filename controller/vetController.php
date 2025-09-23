<?php
session_start();
@include '../model/config.php';
@include '../model/VetModel.php';

if (isset($_POST['submit'])) {
    $fullname    = mysqli_real_escape_string($conn, $_POST['full-name']);
    $contact     = mysqli_real_escape_string($conn, $_POST['contact']);
    $email       = mysqli_real_escape_string($conn, $_POST['email']);
    $pet_type    = mysqli_real_escape_string($conn, $_POST['pet-type']);
    $pet_details = mysqli_real_escape_string($conn, $_POST['address']); 

    // Insert into database
    $result = insertVetRequest($conn, $fullname, $contact, $email, $pet_type, $pet_details);

    if ($result) {
        $_SESSION['success'] = "Your request has been submitted! A vet will contact you soon.";
        header("location: ../view/vet-community.php");
        exit;
    } else {
        $_SESSION['error'] = "Failed to submit your request. Please try again.";
        header("location: ../view/vet-community.php");
        exit;
    }
}
?>
