<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="programs">
    <section class="sc sc-hero sc-template-title-banner">
        <div class="sc-container">
            <?php
            $cover = "./assets/img/design/program-banner.jpg";
            $cover_m = "./assets/img/design/program-banner-m.jpg";

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
                    <i class="ic ic-youtube"></i>
                    <p>ติดตาม</p>
                </a>
            </div>
        </div>
    </section>

    <section class="sc program-grid">
        <div class="sc-inner">
            <div class="sc-header">
                <div class="wrapper">
                    <div class="line to-left"></div>
                </div>
                <h2 class="sc-title animate fadeIn">รายการ</h2>
                <div class="circle-illustration offset-r"></div>
                <div class="wrapper">
                    <div class="line to-right"></div>
                </div>
            </div>

            <div class="grid">
                <?php
                $program_arr = [
                    [
                        "link" => $root . "program-single.php",
                        "thumbnail" => './assets/img/design/program-banner.jpg',
                        "video" => 'https://www.youtube.com/embed/o-llwv4pLrg?si=8Vuab8ISiD3L6hhw&amp;start=10',
                        "title" => "ไกลบ้าน (ทดสอบ iframe)",
                        "description" => "สึสดีค่า คุณอยู่กับ Farose และนี่คือไกลบ้าน"
                    ],
                    [
                        "link" => $root . "program-single.php",
                        "thumbnail" => './assets/img/design/program-banner.jpg',
                        "video" => './assets/img/video/video-banner.mp4',
                        "title" => "ช่างเชื่อม (ทดสอบ video)",
                        "description" => "ช่างเชื่อมจะกลับมาอีกครั้ง เมื่อมีอารมณ์และมีสปอนเซอร์"
                    ],
                    [
                        "link" => $root . "program-single.php",
                        "video" => './assets/img/design/dara-banner.jpg',
                        "title" => "ขอดูเธอหน่อย (ทดสอบ image)",
                        "description" => "พาไปดูอะไรที่เขาไม่เปิดให้ดูกัน"
                    ],
                    [
                        "link" => $root . "program-single.php",
                        "video" => 'https://www.youtube.com/embed/o-llwv4pLrg?si=8Vuab8ISiD3L6hhw&amp;start=10',
                        "title" => "เที่ยวทิพย์",
                        "description" => "เที่ยวไม่ได้ก็ทิพย์เอา"
                    ],
                    [
                        "link" => $root . "program-single.php",
                        "video" => 'https://www.youtube.com/embed/o-llwv4pLrg?si=8Vuab8ISiD3L6hhw&amp;start=10',
                        "title" => "พรรคนี้เป็นไงบ้าง",
                        "description" => "พาไปดูอะไรที่เขาไม่เปิดให้ดูกัน"
                    ]
                ];

                $extra_class = "vertical";

                foreach ($program_arr as $index => $program) {
                    include($root . "include/program-item.php");
                }
                ?>
            </div>

        </div>

        <div class="line bottom to-right"></div>
    </section>
</main>

<?php include($root . "footer.php"); ?>