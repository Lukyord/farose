<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-index">
    <div class="cursor">
    </div>

    <section class="sc sc-hero index-hero">
        <div class="sc-inner">
            <div class="slides animate fadeIn">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php
                        for ($i = 1; $i <= 3; $i++) {
                        ?>
                            <div class="swiper-slide">
                                <div class="wrapper">
                                    <div class="slide-background">
                                        <?php
                                        $slide_image = "./assets/img/design/index-hero-slide" . $i . ".jpg";
                                        $cover = $slide_image;
                                        $cover_m = $slide_image;
                                        if (preg_match("/\.(mp4)$/", $cover)) { ?>
                                            <figure class="object">
                                                <video playsinline muted autoplay loop src="<?php echo $cover; ?>" class="cover"></video>
                                            </figure>
                                        <?php } else { ?>
                                            <picture class="object">
                                                <source media="(min-width:836px)" srcset="<?php echo $cover ?>">
                                                <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                                <img
                                                    src="<?php echo $cover; ?>"
                                                    alt="Index Hero Slide Image"
                                                    class="cover"
                                                    draggable="false">
                                            </picture>
                                        <?php } ?>
                                    </div>
                                    <div class="slide-content">
                                        <div class="content">
                                            <h3 class="slide-title size-h3 weight-semibold">FARATALK</h3>
                                            <a href="#outer" class="button">
                                                <p>ซื้อสินค้า</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>
                        <div class="slide-nav">
                            <div class="index-hero-swiper-button-prev swiper-button-prev"></div>
                            <div class="index-hero-swiper-button-next swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-content">
                <div class="logo">
                    <img src="./assets/img/logo.svg" alt="Farose Logo" class="animate fadeIn" data-wow-delay="0.15s">
                </div>
                <div class="text-vector">
                    <img src="./assets/img/design/text-vector.svg" alt="Text vector" class="text-vector animate fadeIn" data-wow-delay="0.3s">
                    <div class="all-text animate textReveal">
                        <img src="./assets/img/design/all-vector.svg" alt="All Text vector">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sc index-dara">
        <div class="sc-inner">
            <div class="sc-header">
                <h2 class="sc-title animate fadeIn offset-xl">ทำเนียบดาราช่อง</h2>
            </div>

            <?php
            $leading_title = "ดูเรื่องอื่นๆ";

            include($root . "include/dara-grid.php");
            ?>
        </div>
    </section>

    <div class="sc program-and-banner">
        <div class="sc-connect-curve">
            <svg
                class="show-md hidden-device-2xl"
                xmlns="http://www.w3.org/2000/svg" width="117" height="1325" viewBox="0 0 117 1325" preserveAspectRatio="none" fill="none">
                <path class="path" d="M117 1H31C14.4315 1 1 14.4315 1 31V1298C1 1312.36 12.6406 1324 27 1324V1324" stroke="#40A8B2" />
            </svg>
            <svg
                class="show-2xl"
                xmlns="http://www.w3.org/2000/svg" width="68" height="1325" viewBox="0 0 68 1325" preserveAspectRatio="none" fill="none">
                <path class="path" d="M52 1H31C14.4315 1 1 14.4315 1 31V1294C1 1310.57 14.4315 1324 31 1324H68" stroke="#40A8B2" />
            </svg>
        </div>

        <section class="index-program">
            <div class="sc-inner">
                <div class="sc-header">
                    <div class="wrapper hidden-device-md">
                        <div class="line to-left"></div>
                    </div>

                    <h2 class="sc-title animate fadeIn offset-xl" data-wow-delay="0.5s">ไม่หลุดผัง</h2>
                    <div class="circle-illustration offset-r animate fadeIn" data-wow-delay="0.5s"></div>
                    <div class="wrapper">
                        <div class="line to-right"></div>
                    </div>

                </div>

                <div class="slides">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php
                            $program_arr = [
                                [
                                    "bg-deg" => "187deg",
                                    "bg-start-color" => "#FCCBCA",
                                    "bg-end-color" => "#451E60",
                                    "bg-fallback-color" => "#D9D9D9",
                                    "logo" => "./assets/img/design/program-logo1.png",
                                    "image" => "./assets/img/design/program-image1.jpg",
                                    "image_m" => "./assets/img/design/program-image1-m.jpg",
                                    "link" => $root . "program.php",
                                ],
                                [
                                    "bg-deg" => "0deg",
                                    "bg-start-color" => "#025A89",
                                    "bg-end-color" => "#025A89",
                                    "bg-fallback-color" => "#025A89",
                                    "logo" => "./assets/img/design/program-logo2.png",
                                    "image" => "./assets/img/design/program-image2.jpg",
                                    "image_m" => "./assets/img/design/program-image2-m.jpg",
                                    "link" => $root . "program.php",
                                ],
                                [
                                    "bg-deg" => "7deg",
                                    "bg-start-color" => "#004B74",
                                    "bg-end-color" => "#A7DAC7",
                                    "bg-fallback-color" => "#A7DAC7",
                                    "logo" => "./assets/img/design/program-logo3.png",
                                    "image" => "./assets/img/design/program-image3.jpg",
                                    "image_m" => "./assets/img/design/program-image3-m.jpg",
                                    "link" => $root . "program.php",
                                ],
                                [
                                    "bg-deg" => "0deg",
                                    "bg-start-color" => "#EF7F4A",
                                    "bg-end-color" => "#EF7F4A",
                                    "bg-fallback-color" => "#EF7F4A",
                                    "logo" => "./assets/img/design/program-logo4.png",
                                    "image" => "./assets/img/design/program-image4.jpg",
                                    "image_m" => "./assets/img/design/program-image4-m.jpg",
                                    "link" => $root . "program.php",
                                ],
                                [
                                    "bg-deg" => "0deg",
                                    "bg-start-color" => "#E4F4EA",
                                    "bg-end-color" => "#E4F4EA",
                                    "bg-fallback-color" => "#E4F4EA",
                                    "logo" => "./assets/img/design/program-logo5.png",
                                    "image" => "./assets/img/design/program-image5.jpg",
                                    "image_m" => "./assets/img/design/program-image5-m.jpg",
                                    "link" => $root . "program.php",
                                ],
                                [
                                    "bg-deg" => "187deg",
                                    "bg-start-color" => "#FCCBCA",
                                    "bg-end-color" => "#451E60",
                                    "bg-fallback-color" => "#D9D9D9",
                                    "logo" => "./assets/img/design/program-logo1.png",
                                    "image" => "./assets/img/design/program-image1.jpg",
                                    "image_m" => "./assets/img/design/program-image1-m.jpg",
                                    "link" => $root . "program.php",
                                ],
                                [
                                    "bg-deg" => "0deg",
                                    "bg-start-color" => "#025A89",
                                    "bg-end-color" => "#025A89",
                                    "bg-fallback-color" => "#025A89",
                                    "logo" => "./assets/img/design/program-logo2.png",
                                    "image" => "./assets/img/design/program-image2.jpg",
                                    "image_m" => "./assets/img/design/program-image2-m.jpg",
                                    "link" => $root . "program.php",
                                ],
                            ];

                            foreach ($program_arr as $index => $program) {
                                $cover = $program["image"];
                                $cover_m = $program["image_m"];
                            ?>
                                <div class="swiper-slide">
                                    <a
                                        href="<?php echo $root ?>program.php"
                                        class="wrapper animate scaleUp"
                                        data-wow-delay="<?php echo $index * 0.15 ?>s"
                                        data-wow-duration="0.6s"
                                        style="--background: linear-gradient(<?php echo $program["bg-deg"] ?>, <?php echo $program["bg-start-color"] ?> 0%, <?php echo $program["bg-end-color"] ?> 100%), <?php echo $program["bg-fallback-color"] ?>;">
                                        <div class="background-image">
                                            <?php if (preg_match("/\.(mp4)$/", $cover)) { ?>
                                                <figure class="object">
                                                    <video playsinline muted autoplay loop src="<?php echo $cover; ?>" class="cover"></video>
                                                </figure>
                                            <?php } else { ?>
                                                <picture class="object">
                                                    <source media="(min-width:836px)" srcset="<?php echo $cover ?>">
                                                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                                    <img
                                                        src="<?php echo $cover ?>"
                                                        alt="Program Image"
                                                        draggable="false"
                                                        class="cover"
                                                        loading="lazy">
                                                </picture>
                                            <?php } ?>

                                        </div>
                                        <div class="logo">
                                            <img src="<?php echo $program["logo"] ?>" alt="Program Logo" draggable="false">
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="index-program-swiper-button-prev swiper-button-prev"></div>
                <div class="index-program-swiper-button-next swiper-button-next"></div>
            </div>
        </section>

        <section class="video-banner animate fadeIn">
            <div class="sc-inner">
                <div class="wrapper">
                    <div class="video-background">
                        <?php
                        // $cover = "./assets/img/design/program-image3.jpg";
                        $cover = "./assets/img/video/video-banner.mp4";
                        $cover_m = "./assets/img/video/video-banner-m.mp4";

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

                    <h2 class="title font-heading c-white size-h1 weight-light">รับรหัสชาวช่อง</h2>

                    <div class="banner-cta">
                        <div class="member">
                            <p class="size-h4 weight-semibold c-white">
                                เรามีสมาชิกแล้ว
                            </p>
                            <p class="member-number font-heading c-white weight-bold size-h1"><span class="countup" data-stop="37154">37,154</span> คน</p>
                        </div>


                        <a href="#outer" class="button">
                            <p>สมัครสมาชิก</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="sc index-sponser">
        <div class="sc-inner">
            <div class="wrapper">
                <div class="sc-header">
                    <div class="wrapper hidden-device-md">
                        <div class="line to-left"></div>
                    </div>
                    <div class="circle-illustration offset-l"></div>
                    <h2 class="sc-title animate fadeIn">ลูกค้าใจดี</h2>
                    <div class="wrapper hidden-device-md">
                        <div class="line to-right"></div>
                    </div>
                </div>

                <div class="border-line show-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1394" height="184" viewBox="0 0 1394 184" preserveAspectRatio="none" fill="none">
                        <path class="path" d="M95 1H31C14.4315 1 1 14.4315 1 31V153C1 169.569 14.4315 183 31 183H1363C1379.57 183 1393 169.569 1393 153V31C1393 14.4315 1379.57 1 1363 1H321" stroke="#40A8B2" />
                    </svg>
                </div>
                <div class="border-line show-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1394" height="184" viewBox="0 0 1394 184" preserveAspectRatio="none" fill="none">
                        <path path class="path reverse" d="M321 1H1363C1379.6 1 1393 14.4 1393 31V153C1393 169.6 1379.6 183 1363 183H31C14.4 183 1 169.6 1 153V31C1 14.4 14.4 1 31 1H95" stroke="#40A8B2" />
                    </svg>
                </div>


                <div class="slides">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php
                            for ($i = 1; $i <= 10; $i++) {
                            ?>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="./assets/img/design/sponser<?php echo $i % 3 + 1 ?>.png" alt="Sponser" draggable="false" loading="lazy">
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>

                    <div class="index-sponser-swiper-button-prev swiper-button-prev"></div>
                    <div class="index-sponser-swiper-button-next swiper-button-next"></div>
                </div>

                <div class="line bottom to-right hidden-device-md"></div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>