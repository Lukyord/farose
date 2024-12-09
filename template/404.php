<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="not-found">
    <section class="sc sc-hero not-found-hero">
        <div class="sc-inner animate fadeIn">
            <div class="content-wrapper">
                <h2 class="size-h2 c-theme weight-semibold">Error 404</h2>
                <p>Sorry, the page could not be found :&#40;</p>
                <a href="<?php echo $root ?>index.php" class="button">
                    <p>หน้าหลัก</p>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>