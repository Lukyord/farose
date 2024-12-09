<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="membership">
    <section class="sc sc-hero sc-template-title-banner">
        <div class="sc-container">
            <?php
            $banner_title = "สิทธิพิเศษชาวช่อง";
            $cover = "./assets/img/design/membership-banner.jpg";
            $cover_m = "./assets/img/design/membership-banner-m.jpg";

            include($root . "include/template-title-banner.php");
            ?>

            <div class="content">
                <div class="entry-content entry-fadeIn">
                    <p>
                        <strong>ช่องฟาโรส มีหลายรายการ ไกลบ้านเป็นหนึ่งในนั้น</strong>
                    </p>
                    <p>Proin ultrices volutpat ligula, eu faucibus libero tincidunt id. Ut ac facilisis libero. Praesent id velit et quam ultricies volutpat sit amet vitae lectus. Cras ut arcu pretium, rhoncus justo ac, fringilla nunc. Donec malesuada auctor neque, sed efficitur mauris vehicula ut.</p>
                </div>

                <a href="#outer" class="button animate fadeIn">
                    <p>สมัครสมาชิก</p>
                </a>
            </div>
        </div>
    </section>

    <section class="membeship-info">
        <div class="sc-inner">
            <?php
            $block_arr = [
                [
                    "media" => "./assets/img/design/block-media1.jpg",
                    "media_m" => "./assets/img/design/block-media1.jpg",
                    "title" => "Exclusive Contents",
                    "description" => "Donec nulla ligula, pulvinar vel vulputate sit amet, lobortis sit amet nulla. Etiam a diam tincidunt, vehicula augue a, eleifend nisi. Proin ultrices volutpat ligula, eu faucibus libero tincidunt id. Ut ac facilisis libero. Praesent id velit et quam ultricies volutpat sit amet vitae lectus. Cras ut arcu pretium, rhoncus justo ac, fringilla nunc. Donec malesuada auctor neque, sed efficitur mauris vehicula ut."
                ],
                [
                    "media" => "./assets/img/design/block-media2.jpg",
                    "media_m" => "./assets/img/design/block-media2.jpg",
                    "title" => "ส่วนลดและสิทธิ์ Early Bird",
                    "description" => "Donec nulla ligula, pulvinar vel vulputate sit amet, lobortis sit amet nulla. Etiam a diam tincidunt, vehicula augue a, eleifend nisi. Proin ultrices volutpat ligula, eu faucibus libero tincidunt id. Ut ac facilisis libero. Praesent id velit et quam ultricies volutpat sit amet vitae lectus. Cras ut arcu pretium, rhoncus justo ac, fringilla nunc. Donec malesuada auctor neque, sed efficitur mauris vehicula ut."
                ]
            ];

            foreach ($block_arr as $block) {
                include($root . "include/content-block.php");
            }

            ?>

        </div>
    </section>

    <section class="membeship-faq">
        <div class="sc-inner">
            <div class="sc-header">
                <div class="wrapper">
                    <div class="line to-left"></div>
                </div>
                <h2 class="sc-title animate fadeIn">คำถามที่พบบ่อย</h2>
                <div class="circle-illustration offset-r"></div>
                <div class="wrapper">
                    <div class="line to-right"></div>
                </div>
            </div>

            <div class="faq-list">
                <?php
                $faq_arr = [
                    [
                        "question" => "สินค้ามีค่าจัดส่งหรือไม่ ?",
                        "answer" => "จัดส่งฟรีทุกรายการ ไม่มีขั้นต่ำ)",
                    ],
                    [
                        "question" => "สินค้าใช้เวลาจัดส่งกี่วัน ?",
                        "answer" => "สินค้าตัดรอบจัดส่งทุกวันจันทร์ และวันพฤหัสบดีเวลา 13.00 น. และใช้เวลาจัดส่งประมาณ 3-5 วัน ขึ้นอยู่กับพื้นที่จัดส่ง",
                    ],
                    [
                        "question" => "ติดตามเลขพัสดุได้ที่ไหน",
                        "answer" => "ระบบจะส่งหมายเลขติดตามพัสดุไปยังอีเมลที่แจ้งไว้",
                    ],
                    [
                        "question" => "จัดส่งไปต่างประเทศด้วยหรือไม่ ?",
                        "answer" => "ตอนนี้สินค้าของฟาโรสจัดส่งเฉพาะในประเทศไทยเท่านั้น",
                    ],
                    [
                        "question" => "หากออเดอร์มีปัญหา ได้รับสินค้าไม่ครบ สินค้ามีตำหนิ หรือมีปัญหาเรื่องการจัดส่งต้องติดต่อใคร ?",
                        "answer" => "กรณีที่สินค้ามีปัญหากรุณาติดต่อทีมงานทาง Line:<a href='#outer'>@farose</a> เรามีทีมแอดมินคอยช่วยเหลือ หากติดต่อมาในโซเชียลมีเดียช่องทางอื่นอาจตกหล่นหรือตอบล่าช้าได้",
                    ],
                    [
                        "question" => "สินค้าที่ขึ้นว่า sold out จะมีการผลิตเพิ่มหรือไม่ ?",
                        "answer" => "สินค้าบางชิ้นผลิตเพื่อวาระพิเศษ หมดแล้วหมดเลย บางชิ้นหมดแล้วอาจผลิตเพิ่ม ติดตามรายละเอียดการประกาศสินค้าใหม่หรือการผลิตเพิ่ม ได้ที่ช่องทางโซเดียลมีเดียของเรา Instagram:<a href='#outer'>@farosestudio</a> หรือ Facebook:<a href='#outer'>Farose</a>",
                    ],
                ];

                foreach ($faq_arr as $faq) {
                ?>
                    <div class="faq-item animate fadeIn">
                        <div class="faq-line">
                            <div class="bubble">Q</div>
                            <h5 class="question"><?php echo $faq["question"] ?></h5>
                        </div>
                        <div class="faq-line">
                            <div class="bubble">A</div>
                            <p class="answer"><?php echo $faq["answer"] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
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
</main>

<?php include($root . "footer.php"); ?>