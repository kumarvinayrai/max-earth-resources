<!-- news.php -->
<?php
$bannerImage = '/public/images/admin-news.jpg';
$bannerHeading = 'Admin - News';
$bannerText = 'Manage company news and updates';
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../partials/navbar.php';
include __DIR__ . '/../partials/banner.php';
?>
<div class="container my-5">
  <h2>News Management</h2>
  <p>Manage all news articles here.</p>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>