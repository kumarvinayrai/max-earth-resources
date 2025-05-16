<?php
$bannerImage = '/public/images/admin-login-banner.jpg';
$bannerHeading = 'Admin Login';
$bannerText = 'Please login to access admin panel.';

include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';  // Optionally hide navbar here for login page
include __DIR__ . '/../partials/banner.php';
?>

<div class="container my-5">
  <h2>Admin Login</h2>
  <p>Login form for admin users.</p>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
