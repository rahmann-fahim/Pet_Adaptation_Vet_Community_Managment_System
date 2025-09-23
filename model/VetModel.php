<?php
@include 'config.php';

// Insert vet community request into tbl_vet_community_info
function insertVetRequest($conn, $fullname, $contact, $email, $pet_type, $pet_details) {
    $insert = "INSERT INTO tbl_vet_community_info (full_name, phone, email, pet_type, pet_details) 
               VALUES ('$fullname', '$contact', '$email', '$pet_type', '$pet_details')";
    return mysqli_query($conn, $insert);
}
?>
