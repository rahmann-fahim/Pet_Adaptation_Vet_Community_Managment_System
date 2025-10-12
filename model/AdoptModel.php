<?php
@include 'config.php';

function insertAdoptInfo($conn, $fullname, $contact, $email, $address) {
    $insert = "INSERT INTO tbl_adopt_info (full_name, phone, email, address) 
               VALUES ('$fullname', '$contact', '$email', '$address')";
    return mysqli_query($conn, $insert);
}
?>
