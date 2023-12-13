<?php

// Get form data
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

// Prepare data for Excel
$data = "$name,$email,$subject,$message\n";

// Define the path to the Excel file
$excelFilePath = 'form_data.csv';

// Open the file in append mode
$file = fopen($excelFilePath, 'a');

// Write data to the file
fwrite($file, $data);

// Close the file
fclose($file);

// Redirect back to the contact page
header('Location: index.html#contact');
exit();

?>
