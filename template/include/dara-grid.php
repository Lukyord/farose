<?php $total_dara = 19 ?>
<div
    class="dara-grid-wrapper"
    data-total-dara="<?php echo $total_dara ?>">
    <!-- Leading Curve -->
    <?php
    if (isset($leading_title)) {
        $cover = "./assets/img/design/dara-leading-curve.svg";
        $cover_m = "./assets/img/design/dara-leading-curve-m.svg";
    ?>
        <div class="leading-curve">
            <div class="text">
                <div class="circle-illustration offset-l"></div>
                <p class="c-light-sea-green"><?php echo $leading_title ?></p>
            </div>
            <div class="show-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="365" viewBox="0 0 94 365" fill="none">
                    <path
                        class="path" d="M1 0V292C1 331.765 33.2355 364 73 364H94" stroke="#40A8B2" />
                </svg>
            </div>

            <div class="hidden-device-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="231" viewBox="0 0 8 231" fill="none">
                    <path
                        class="path" d="M1 0V223C1 226.866 4.13401 230 8 230V230" stroke="#40A8B2" />
                </svg>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- Dara Grid -->
    <div class="dara-grid">
        <?php
        for ($i = 1; $i <= $total_dara; $i++) {

            $image_index = ($i - 1) % 19 + 1;
        ?>
            <div class="dara">
                <div class="dara-image blurred-media" data-dara-name="ดารา <?php echo $image_index ?>">
                    <a href="<?php echo $root ?>dara-single.php" class="link-block">
                        <img src="./assets/img/design/dara<?php echo $image_index ?>.png" alt="Dara Image" draggable="false" loading="lazy">
                    </a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>