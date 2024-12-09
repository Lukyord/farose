<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-dara">
    <div class="cursor">
    </div>

    <section class="sc sc-hero dara-hero">
        <div class="sc-container">
            <?php
            $banner_title = "ดาราช่อง";
            $cover = "./assets/img/design/dara-banner.jpg";
            $cover_m = "./assets/img/design/dara-banner-m.jpg";

            include($root . "include/template-title-banner.php");
            ?>
        </div>
    </section>

    <section class="sc all-dara">
        <div class="sc-inner">
            <?php
            include($root . "include/dara-grid.php");
            ?>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>