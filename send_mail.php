<!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Bootstrap/css/headers.css">
  <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.css">
    	
    <link href="Bootstrap/css/navbar.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Specify your email address
    $to = "olajideadebayo78@gmail.com";
    
    // Subject of the email
    $email_subject = "New Contact Form Submission: $subject";

    // Body of the email
    $email_body = "You have received a new message from your contact form on the stock trading website.\n\n".
                  "Name: $name\n".
                  "Email: $email\n\n".
                  "Message:\n$message";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Redirect to a 'thank you' page or show success message
        echo "Your message has been sent successfully.";
    } else {
        // Handle error
        echo "There was an error sending the message.";
    }
}

header('Content-Type: text/html; charset=UTF-8');
?> 



<?php
  $to = "olajideadebayo78@gmail.com";
  $subject = "Form Submission";
  $body = "First Name: " . $_POST["firstName"] . "\n";
  $body .= "Last Name: " . $_POST["lastName"] . "\n";
  // Add more fields here
  mail($to, $subject, $body);
  
  header('Content-Type: text/html; charset=UTF-8');
?>	
<!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
 
 <script src="Bootstrap/js/Bootstrap.bundle.min.js"></script>

      <script src="Bootstrap/js/offcanvas.js"></script>
      
      <script src="assets/js/Styles.js"></script>
      
      <script src="Bootstrap/js/sidebars.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  