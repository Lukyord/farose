<div class="program-item <?php if (isset($extra_class)) echo $extra_class ?>">
    <a href="<?php echo $program["link"] ?>" <?php if (isset($new_tab)) echo 'target="_blank"' ?> class="wrapper link-block">
        <div class="video-thumbnail">
            <?php
            if (preg_match("/\.mp4$/", $program["video"])) { ?>
                <img src="<?php echo $thumbnail_url; ?>" alt="Video Thumbnail" class="thumbnail" draggable="false" loading="lazy">
                <figure class="object">
                    <video playsinline muted autoplay loop src="<?php echo $program["video"]; ?>" class="video"></video>
                </figure>
            <?php } elseif (preg_match("/^https:/", $program["video"])) {
                $youtube_url = $program["video"];
                preg_match('/(?:youtube\.com.*(?:v=|\/embed\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $youtube_url, $matches);

                $video_id = $matches[1];
                $yt_thumbnail_url = "https://img.youtube.com/vi/{$video_id}/0.jpg";

                $thumbnail_url = "";

                if (isset($program["thumbnail"])) {
                    $thumbnail_url = $program["thumbnail"];
                } else {
                    $thumbnail_url = $yt_thumbnail_url;
                }
            ?>
                <img src="<?php echo $thumbnail_url; ?>" alt="Video Thumbnail" class="thumbnail" draggable="false" loading="lazy">
                <iframe
                    width="560" height="315"
                    class="video-iframe"
                    src="<?php echo $program["video"]; ?>&autoplay=0&mute=1&controls=0&rel=0"
                    title="<?php echo $program['title'] ?> Youtube Video Player"
                    frameborder="0"
                    loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
                </iframe>
            <?php } elseif (preg_match("/\.(png|jpg|jpeg|gif)$/", $program["video"])) { ?>
                <img src="<?php echo $program["video"]; ?>" alt="Video Thumbnail" draggable="false" loading="lazy">
            <?php } ?>
        </div>
        <div class="text-content">
            <h5 class="video-title weight-semibold"><?php echo $program["title"] ?></h5>
            <p class="video-description"><?php echo $program["description"] ?></p>
        </div>
    </a>
</div>