<?php
$bannerController = new BannerController();
$banners = $bannerController->getBannerData();
?>
<div class="banner-slider">
    <?php foreach ($banners as $banner): ?>
        <div class="banner-item" style="background-image: url('<?php echo $banner['image']; ?>');">
            <h2><?php echo $banner['title']; ?></h2>
            <p><?php echo $banner['content']; ?></p>
        </div>
    <?php endforeach; ?>
</div>
