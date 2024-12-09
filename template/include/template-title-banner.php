<div class="template-title-banner">
    <div class="background <?php if (isset($banner_title)) echo "bg-overlay" ?>">
        <?php

        if (preg_match("/\.(mp4)$/", $cover)) { ?>
            <figure class="object">
                <video playsinline muted autoplay loop src="<?php echo $cover; ?>" class="cover"></video>
            </figure>
        <?php } else { ?>
            <picture class="object">
                <source media="(min-width:836px)" srcset="<?php echo $cover ?>">
                <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                <img
                    src="<?php echo $cover ?>"
                    alt="Video Banner"
                    draggable="false"
                    class="cover"
                    loading="lazy">
            </picture>
        <?php } ?>
    </div>

    <?php
    if (isset($banner_title)) {
    ?>
        <h2 class="banner-title"><?php echo $banner_title ?></h2>
    <?php } ?>
</div>