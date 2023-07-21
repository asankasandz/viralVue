<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $company = $_POST['company'];
  $email = $_POST['email'];
  $requirements = $_POST['requirements'];

  // Compose the email message
  $to = 'asankasandruwan@gmail.com'; // Replace with the recipient's email address
  $subject = 'Contact Form Submission';
  $message = "Name: $name\n\nCompany: $company\n\nEmail: $email\n\nRequirements: $requirements";
  $headers = "From: $name <$email>";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    $response = ['success' => true, 'message' => 'Email sent successfully'];
    echo json_encode($response);
  } else {
    // Failed to send email
    $response = ['success' => false, 'message' => 'Failed to send email'];
    echo json_encode($response);
  }
}
?>