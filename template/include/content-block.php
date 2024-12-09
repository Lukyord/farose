<div class="content-block animate fadeIn">
    <div class="media">
        <?php
        if (preg_match("/\.(mp4)$/", $block["media"])) { ?>
            <figure class="object blurred-media">
                <video playsinline muted autoplay loop src="<?php echo $block["media"]; ?>" class="cover"></video>
            </figure>
        <?php } else { ?>
            <picture class="object blurred-media">
                <source media="(min-width:836px)" srcset="<?php echo $block["media"] ?>">
                <source media="(min-width:0px)" srcset="<?php echo $block["media_m"] ?>">
                <img
                    src="<?php echo $block["media"]; ?>"
                    alt="Block Media"
                    class="cover"
                    draggable="false">
            </picture>
        <?php } ?>
    </div>

    <div class="text-content">
        <div class="content-wrapper">
            <h4 class="block-title"><?php echo $block["title"] ?></h4>
            <p class="description"><?php echo $block["description"] ?></p>
        </div>
    </div>
</div>