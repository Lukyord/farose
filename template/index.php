<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index">
    <section class="sc index-hero">
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
                                        <img src="./assets/img/design/index-hero-slide<?php echo $i ?>.jpg" alt="Index Hero Slide" loading="lazy" draggable="false">
                                    </div>
                                    <div class="slide-content">
                                        <div class="content">
                                            <h3 class="slide-title size-h3 weight-semibold">FARATALK</h3>
                                            <a href="#outer" class="button">
                                                <p>ซื้อสินค้า</p>
                                            </a>
                                        </div>
                                        <div class="slide-nav">
                                            <div class="index-hero-swiper-button-prev swiper-button-prev"></div>
                                            <div class="index-hero-swiper-button-next swiper-button-next"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>

            <div class="text-content">
                <div class="logo">
                    <img src="./assets/img/logo.svg" alt="Farose Logo">
                </div>
                <div class="text-vector">
                    <img src="./assets/img/design/text-vector.svg" alt="Text vector">
                    <div class="all-text animate textReveal">
                        <img src="./assets/img/design/all-vector.svg" alt="All Text vector">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-dara">
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

    <section class="index-program">
        <div class="sc-inner">
            <div class="sc-header">
                <h2 class="sc-title animate fadeIn offset-xl">ไม่หลุดผัง</h2>
                <div class="circle-illustration offset-r"></div>
                <div class="wrapper">
                    <div class="line"></div>
                </div>
            </div>

            <div class="slides">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $program_arr = [
                            [
                                "background" => "linear-gradient(187deg, #FCCBCA 0%, #451E60 100%), #D9D9D9;",
                                "logo" => "./assets/img/design/program-logo1.png",
                                "image" => "./assets/img/design/program-image1.jpg",
                                "image_m" => "./assets/img/design/program-image1-m.jpg",
                                "link" => $root . "program.php",
                            ],
                            [
                                "background" => "linear-gradient(0deg, #025A89 0%, #025A89 100%)",
                                "logo" => "./assets/img/design/program-logo2.png",
                                "image" => "./assets/img/design/program-image2.jpg",
                                "image_m" => "./assets/img/design/program-image2-m.jpg",
                                "link" => $root . "program.php",
                            ],
                            [
                                "background" => "linear-gradient(7deg, #004B74 0%, #A7DAC7 100%)",
                                "logo" => "./assets/img/design/program-logo3.png",
                                "image" => "./assets/img/design/program-image3.jpg",
                                "image_m" => "./assets/img/design/program-image3-m.jpg",
                                "link" => $root . "program.php",
                            ],
                            [
                                "background" => "linear-gradient(0deg, #EF7F4A 0%, #EF7F4A 100%)",
                                "logo" => "./assets/img/design/program-logo4.png",
                                "image" => "./assets/img/design/program-image4.jpg",
                                "image_m" => "./assets/img/design/program-image4-m.jpg",
                                "link" => $root . "program.php",
                            ],
                            [
                                "background" => "linear-gradient(0deg, #E4F4EA 0%, #E4F4EA 100%)",
                                "logo" => "./assets/img/design/program-logo5.png",
                                "image" => "./assets/img/design/program-image5.jpg",
                                "image_m" => "./assets/img/design/program-image5-m.jpg",
                                "link" => $root . "program.php",
                            ],
                            [
                                "background" => "linear-gradient(187deg, #FCCBCA 0%, #451E60 100%), #D9D9D9;",
                                "logo" => "./assets/img/design/program-logo1.png",
                                "image" => "./assets/img/design/program-image1.jpg",
                                "image_m" => "./assets/img/design/program-image1-m.jpg",
                                "link" => $root . "program.php",
                            ],
                            [
                                "background" => "linear-gradient(0deg, #025A89 0%, #025A89 100%)",
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
                                <div
                                    class="wrapper animate scaleUp"
                                    data-wow-delay="<?php echo $index * 0.1 ?>s"
                                    data-wow-duration="0.6s"
                                    style="--background: <?php echo $program["background"] ?>">
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
                                        <img src="<?php echo $program["logo"] ?>" alt="Program Logo">
                                    </div>
                                </div>
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

    <section class="video-banner"></section>
</main>

<?php include($root . "footer.php"); ?>