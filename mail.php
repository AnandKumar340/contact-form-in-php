<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);
    $to      = 'outreach@wahstory.com';
    $subject = 'Webinar Registration details.';
    $message .= 'Name: ' . $name . "\r\n";
    $message .= 'Email: ' . $email . "\r\n";
    $message .= 'Phone: ' . $phone . "\r\n";
    $message .= 'Company: ' . $company . "\r\n";
    $message .= 'Age: ' . $age . "\r\n";
    $message .= 'City: ' . $city . "\r\n";
    $message .= 'Attent Webinar ?: ' . $attent_webinar . "\r\n";
    $headers = 'From: domain@example.com' . "\r\n" .
        'Reply-To: domain@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    if (mail($to, $subject, $message, $headers)) {
        $_SESSION['msg'] = "Swal.fire(
                        'Mail Sent Successfully',
                        'We will contact you soon',
                        'success'
                        )";
    } else {
        $_SESSION['msg'] = "Swal.fire(
                        'Error While Sending Mail',
                      'Please try again',
                        'error'
                        )";
    }
    header('Location: /registration.php');
}

