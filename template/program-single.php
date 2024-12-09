<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="program-single">
    <section class="sc sc-hero sc-template-single">
        <div class="sc-inner">
            <a href="<?php echo $root ?>program.php" class="link-block back-to-all">
                <i class="ic ic-caret-left"></i>
                <p>ช่อง Farose</p>
            </a>

            <div class="content">
                <div class="sticky">
                    <div class="content-wrapper">
                        <div class="media">
                            <?php
                            // $cover = "https://www.youtube.com/embed/o-llwv4pLrg?si=8Vuab8ISiD3L6hhw&amp;start=10";
                            // $cover = "./assets/img/design/program-image3.jpg";
                            $cover = "./assets/img/video/video-banner.mp4";
                            $cover_m = "./assets/img/video/video-banner-m.mp4";

                            if (preg_match("/\.mp4$/", $cover)) { ?>
                                <figure class="object">
                                    <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                                </figure>
                            <?php } elseif (preg_match("/^https:/", $cover)) { ?>
                                <iframe
                                    title="Dara Template Video"
                                    src="<?php echo $cover; ?>&autoplay=1&mute=1&controls=0&rel=0&loop=1"
                                    allow="accelerometer; autoplay; modestbranding; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            <?php } elseif (preg_match("/\.(png|jpg|jpeg|gif)$/", $cover)) { ?>
                                <picture class="object">
                                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                    <img src="<?php echo $cover; ?>" alt="Dara Template Image" draggable="false" loading="lazy">
                                </picture>
                            <?php } ?>

                            <button class="play-pause-button playing">
                                <i class="ic ic-"></i>
                            </button>
                        </div>

                        <a href="#outer" class="button animate fadeIn">
                            <i class="ic ic-playlist_play"></i>
                            <p>ไปยังเพลย์ลิสต์</p>
                        </a>
                    </div>
                </div>

                <div class="header">
                    <div class="wrapper">
                        <div class="border-line">
                            <svg
                                class="show-md"
                                xmlns="http://www.w3.org/2000/svg" width="553" height="113" viewBox="0 0 553 113" preserveAspectRatio="none" fill="none">
                                <path
                                    style="animation-duration: 1.6s; "
                                    class="path"
                                    d="M11.8343 47.0001V47.0001C5.85067 47.0001 0.999996 51.8508 0.999995 57.8344L0.999992 87.9998C0.999991 101.255 11.7452 112 25 112L528 112C541.255 112 552 101.255 552 87.9999L552 25.0002C552 11.7453 541.255 1.00019 528 1.00019L101 1.00019" stroke="#40A8B2" />
                            </svg>
                            <svg
                                class="hidden-device-md"
                                xmlns="http://www.w3.org/2000/svg" width="358" height="113" viewBox="0 0 358 113" preserveAspectRatio="none" fill="none">
                                <path
                                    style="animation-duration: 1.6s;"
                                    class="path"
                                    d="M8 47.0002V47.0002C4.13401 47.0002 0.999996 50.1342 0.999995 54.0002L0.999992 88.0001C0.999991 101.255 11.7452 112 25 112L333 112C346.255 112 357 101.255 357 88.0001L357 25C357 11.7451 346.255 1 333 1L90 1" stroke="#40A8B2" />
                            </svg>
                        </div>

                        <div class="header-content">
                            <div class="header-image blurred-media">
                                <img src="./assets/img/design/program-avatar.png" alt="Dara Image" draggable="false" loading="lazy">
                            </div>

                            <div class="text">
                                <h4 class="title">ไกลบ้าน</h4>
                                <p class="subtitle">สึสดีค่า คุณอยู่กับ Farose และนี่คือไกลบ้าน</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="body">
                    <div class="entry-content entry-fadeIn">
                        <p>
                            <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas efficitur sit amet magna in vestibulum. Quisque sodales erat vel risus consectetur eleifend. Nullam enim eros, pellentesque id eros vitae, semper rutrum erat. </strong>
                        </p>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ac rutrum sem. Vivamus porttitor malesuada purus, ut varius arcu pellentesque ac. Donec nulla ligula, pulvinar vel vulputate sit amet, lobortis sit amet nulla. Etiam a diam tincidunt, vehicula augue a, eleifend nisi. Proin ultrices volutpat ligula, eu faucibus libero tincidunt id. Ut ac facilisis libero. Praesent id velit et quam ultricies volutpat sit amet vitae lectus. Cras ut arcu pretium, rhoncus justo ac, fringilla nunc. Donec malesuada auctor neque, sed efficitur mauris vehicula ut.</p>
                        <p>Cras ut magna quis lectus vulputate mattis eu a libero. Aliquam vitae lorem faucibus, malesuada enim ac, luctus turpis. Phasellus augue dolor, molestie a semper molestie, maximus vel sem. In hac habitasse platea dictumst. Maecenas dapibus, augue ut tincidunt vulputate, lacus nunc efficitur lorem, a egestas nulla eros quis quam. Morbi et faucibus elit. Sed dapibus nisl non massa suscipit posuere. Nunc imperdiet sit amet lectus sed mattis. Sed elementum sollicitudin ex a scelerisque. Aliquam ullamcorper euismod nisl, vitae vulputate orci vulputate non. Nulla fermentum metus augue, non condimentum nisi varius convallis. Nulla dignissim rhoncus magna eget efficitur. Nullam sed hendrerit sem. Aenean nibh lacus, volutpat quis euismod bibendum, ornare id diam. Morbi et pharetra purus.</p>
                    </div>
                </div>

                <div class="footer programs-content">
                    <div class="wrapper">
                        <div class="sc-header">
                            <div class="wrapper hidden-device-md">
                                <div class="line to-left"></div>
                            </div>
                            <h2 class="sc-title animate fadeIn">รายการ</h2>
                            <div class="circle-illustration offset-r"></div>
                            <div class="wrapper hidden-device-md">
                                <div class="line to-right"></div>
                            </div>
                        </div>

                        <div class="border-line">
                            <svg xmlns="http://www.w3.org/2000/svg" width="553" height="507" viewBox="0 0 553 507" preserveAspectRatio="none" fill="none">
                                <path
                                    class="path"
                                    d="M28.0001 0.999998L25.0001 0.999998C11.7452 0.999999 1.00007 11.7452 1.00007 25L1.00005 482C1.00004 495.255 11.7452 506 25 506L528 506C541.255 506 552 495.255 552 482L552 25C552 11.7451 541.255 0.999983 528 0.999983L197.5 0.999983" stroke="#40A8B2" />
                            </svg>
                        </div>

                        <div class="border-line">
                            <svg xmlns="http://www.w3.org/2000/svg" width="553" height="507" viewBox="0 0 553 507" preserveAspectRatio="none" fill="none">
                                <path
                                    class="path reverse"
                                    d="M197.5 1H528C541.3 1 552 11.7 552 25V482C552 495.3 541.3 506 528 506H25C11.7 506 1 495.3 1 482V25C1 11.7 11.7 1 25 1H28" stroke="#40A8B2" />
                            </svg>
                        </div>


                        <div class="footer-content">
                            <?php
                            $program_arr = [
                                [
                                    "link" => "https://www.youtube.com/watch?v=o-llwv4pLrg",
                                    "video" => 'https://www.youtube.com/embed/o-llwv4pLrg?si=8Vuab8ISiD3L6hhw&amp;start=10',
                                    "title" => "พรรคนี้เป็นไงบ้าง? EP1 ก้าวไกล",
                                    "description" => "Farose"
                                ],
                                [
                                    "link" => "https://www.youtube.com/watch?v=o-llwv4pLrg",
                                    "video" => 'https://www.youtube.com/embed/o-llwv4pLrg?si=8Vuab8ISiD3L6hhw&amp;start=10',
                                    "title" => "ไกลบ้าน EP7 ล่ามพูดตาม ล่ามพูดพร้อม เทคนิคล่ามเบื้องต้นที่ควรรู้ (Würzburg, Germany)",
                                    "description" => "Farose"
                                ],
                                [
                                    "link" => "https://www.youtube.com/watch?v=o-llwv4pLrg",
                                    "video" => 'https://www.youtube.com/embed/o-llwv4pLrg?si=8Vuab8ISiD3L6hhw&amp;start=10',
                                    "title" => "PYMK EP96 โมเสส บัญญัติสิบประการ ตำนานแหวกทะเลแดง และดินแดนแห่งพันธสัญญา",
                                    "description" => "Farose Podcast"
                                ]
                            ];
                            $new_tab = true;

                            foreach ($program_arr as $index => $program) {
                                include($root . "include/program-item.php");
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="line bottom to-right hidden-device-md"></div>

    </section>

    <section class="sc program-grid">
        <div class="sc-inner">
            <div class="sc-header">
                <div class="wrapper">
                    <div class="line to-left"></div>
                </div>
                <h2 class="sc-title animate fadeIn">รายการอื่นๆ</h2>
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