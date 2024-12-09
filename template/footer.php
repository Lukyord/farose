<footer id="footer">
    <div class="footer-nav">
        <div class="upper">
            <div class="footer-logo margin-bottom-20">
                <a href="<?php echo $root; ?>index.php" class="logo link-block">
                    <img src="<?php echo $root; ?>assets/img/footer-logo.svg" alt="Farose Footer Logo" draggable="false">
                </a>
            </div>

            <ul class="social-menu c-white">
                <li><a href="#outer">
                        <i class="ic ic-youtube size-icon-20"></i></a></li>
                <li><a href="#outer">
                        <i class="ic ic-instagram size-icon-20"></i></a></li>
                </a></li>
                <li><a href="#outer">
                        <i class="ic ic-facebook size-icon-20"></i></a></li>
                </a></li>
                <li><a href="#outer">
                        <i class="ic ic-tiktok size-icon-20"></i></a></li>
                </a></li>
            </ul>
        </div>
        <div class="lower">
            <div class="footer-menu">
                <a href="<?php echo $root ?>page.php">Terms</a>
                <a href="<?php echo $root ?>page.php">Privacy</a>
                <a href="<?php echo $root ?>page.php">Cookie</a>
            </div>
            <p class="size-description margin-top-6">© Farose studio 2024 | Web by ::*</p>
        </div>
    </div>
</footer>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php
if ($page_index) {
    include($root . "include/_wp-code/wp-cookie-law-info-bar.php");
}
?>

<div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div>

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/imagesLoaded/imagesLoaded.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/gsap.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/Flip.min.js"></script>

<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/common/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/common/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/common/util.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/script.js?v=<?php echo time(); ?>"></script>

</body>

</html>