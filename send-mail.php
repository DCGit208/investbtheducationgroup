<?php
$to = "invest@btheducationgroup.com";

// Get and sanitize form data
$name     = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
$email    = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$phone    = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : '';
$industry = isset($_POST['industry']) ? strip_tags(trim($_POST['industry'])) : '';
$message  = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';
$source   = isset($_POST['source']) ? strip_tags(trim($_POST['source'])) : '';

// Validate required fields
if (!$name || !$email || !$phone || !$industry) {
    echo "<h2>Submission Error</h2><p>Please fill in all required fields.</p>";
    exit;
}

// Build the email subject and body
$subject = "New Application: $industry ($source)";
$body = "Name: $name\nEmail: $email\nPhone: $phone\nIndustry: $industry\nSource: $source\n";
if ($message) {
    $body .= "Message: $message\n";
}

// Use your domain email as From, applicant as Reply-To (for iPage)
$headers = "From: Investor Education Program <invest@btheducationgroup.com>\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    echo "<h2>Thank you!</h2><p>Your application has been received. We will contact you within 48 hours.</p><p><a href='index.php'>Back to Home</a></p>";
} else {
    echo "<h2>Error</h2><p>Sorry, there was a problem sending your application. Please try again later or contact us directly at invest@btheducationgroup.com.</p>";
}
?>
