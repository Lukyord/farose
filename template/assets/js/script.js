// var path = document.querySelector(".path.reverse");
// var length = path.getTotalLength();
// console.log(length);

/* ===== TEMPLATE ======================================== */
// DASHLINE ANIMATE PATH
jQuery(document).ready(function () {
    if ($(".path").length) {
        $(".path").each(function () {
            const path = $(this);
            const ratioInView = 1 / 10;

            function inViewCallback() {
                if (!$("html").hasClass("overflow-hidden")) {
                    path.addClass("in-view");
                }
            }
            function outOfViewCallback() {}

            $(window).on("scroll resize", () => {
                checkIfInView(
                    ratioInView,
                    path,
                    inViewCallback,
                    outOfViewCallback
                );
            });

            checkIfInView(ratioInView, path, inViewCallback, outOfViewCallback);
        });
    }

    if ($(".line").length) {
        $(".line").each(function () {
            const line = $(this);
            const ratioInView = 1 / 10;

            function inViewCallback() {
                if (!$("html").hasClass("overflow-hidden")) {
                    line.addClass("in-view");
                }
            }
            function outOfViewCallback() {}

            $(window).on("scroll resize", () => {
                checkIfInView(
                    ratioInView,
                    line,
                    inViewCallback,
                    outOfViewCallback
                );
            });

            checkIfInView(ratioInView, line, inViewCallback, outOfViewCallback);
        });
    }
});

// COUNTUP
jQuery(document).ready(function () {
    $.easing.easeOutExpoCustom = function (x) {
        return x === 1 ? 1 : 1 - Math.pow(3, -10 * x);
    };

    function startCountAnimation(element) {
        var $this = $(element),
            countTo = $this.attr("data-stop");

        function addSeparator(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $({ countNum: $this.text() }).animate(
            {
                countNum: countTo,
            },
            {
                duration: 3000,
                easing: "easeOutExpoCustom",
                step: function () {
                    $this.text(addSeparator(Math.floor(this.countNum)));
                },
                complete: function () {
                    $this.text(addSeparator(this.countNum));
                },
            }
        );
    }

    if ($(".countup").length) {
        $(".countup").each(function () {
            const countUp = $(this);
            const ratioInView = 1 / 10;

            function inViewCallback() {
                if (
                    !$("html").hasClass("overflow-hidden") &&
                    !countUp.hasClass("animated")
                ) {
                    countUp.addClass("in-view animated");
                    startCountAnimation(countUp);
                }
            }

            $(window).on("scroll resize", () => {
                checkIfInView(ratioInView, countUp, inViewCallback, () => {});
            });

            checkIfInView(ratioInView, countUp, inViewCallback, () => {});
        });
    }
});

// DARA GRID
jQuery(document).ready(function () {
    function updateRowNumber() {
        const totalDara = parseInt($(".dara-grid-wrapper").data("total-dara"));
        const $wrapper = $(".dara-grid-wrapper");
        const dara = $(".dara-grid-wrapper .dara");

        const divideByMobile = 3;
        const divideByPc = 7;

        const rowNumberMobile = Math.ceil(totalDara / divideByMobile);
        const rowNumberPc = Math.ceil(totalDara / divideByPc);

        $(".dara-grid-wrapper").css("--row-number-pc", rowNumberPc);
        $(".dara-grid-wrapper").css("--row-number-mb", rowNumberMobile);
        const curveConnectNumber = rowNumberMobile - 1;

        dara.each(function (index) {
            const rowIndexMobile = Math.floor(index / divideByMobile) + 1;
            const rowIndexPc = Math.floor(index / divideByPc) + 1;

            if (rowIndexMobile % 2 === 0) {
                $(this).addClass("even-row-mb");
            }

            if (rowIndexPc % 2 === 0) {
                $(this).addClass("even-row-pc");
            }
        });

        // Add curve-connect elements
        for (let i = 0; i < curveConnectNumber; i++) {
            const extraClass = i + 1 >= rowNumberPc ? "hidden-device-md" : "";

            let curveConnectHTML = `
                <div class="curve-connect ${extraClass}">
                </div>
            `;

            $wrapper.append(curveConnectHTML);
        }
    }

    updateRowNumber();
});

// DARA CURSOR
jQuery(document).ready(function () {
    const cursor = $(".cursor");
    const daraImage = $(".dara-image");

    function enableCursorInteractions() {
        $(document).on("mousemove.cursorControl", function (e) {
            const x = e.clientX;
            const y = e.clientY;
            cursor.css({ top: `${y}px`, left: `${x}px` });
        });

        daraImage.on("mouseenter.cursorControl", function () {
            // $("html").addClass("no-cursor");
            cursor.addClass("hover-dara");

            const daraName = $(this).data("dara-name");
            cursor.html(daraName);
        });

        daraImage.on("mouseleave.cursorControl", function () {
            // $("html").removeClass("no-cursor");
            cursor.removeClass("hover-dara");
            cursor.html("");
        });
    }

    function disableCursorInteractions() {
        $(document).off("mousemove.cursorControl");
        daraImage.off(".cursorControl");
        cursor.removeClass("hover-dara").html("");
        $("html").removeClass("no-cursor");
    }

    function handleCursorFeature() {
        const isLargeScreen = $(window).width() > 835;

        if (isLargeScreen) {
            enableCursorInteractions();
        } else {
            disableCursorInteractions();
        }
    }

    onWindowResize(handleCursorFeature);
});

/* ===== INDEX ======================================== */
// HERO SLIDE
jQuery(document).ready(function () {
    if ($(".index-hero .swiper").length) {
        $(".index-hero .swiper").each(function () {
            const _this = $(this);
            let slides;
            let isSmallScreen = window.innerWidth <= 835;
            let activeSlideIndex = 0;

            function initializeSwiper() {
                const currentIsSmallScreen = window.innerWidth <= 835;

                if (currentIsSmallScreen !== isSmallScreen || !slides) {
                    isSmallScreen = currentIsSmallScreen;

                    if (slides) {
                        activeSlideIndex = slides.realIndex;
                        slides.destroy(true, true);
                    }

                    const nextSlideConfig = isSmallScreen
                        ? {
                              translate: [0, "min(7vw, 70px)", 0],
                              scale: 0.92,
                              opacity: 1,
                          }
                        : {
                              translate: [0, "min(3.1vw, 53px)", 0],
                              scale: 0.95,
                              opacity: 1,
                          };

                    slides = new Swiper(_this[0], {
                        speed: 800,
                        loop: true,
                        direction: "vertical",
                        effect: "creative",
                        creativeEffect: {
                            shadowPerProgress: true,
                            limitProgress: 8,
                            prev: {
                                scale: 0.85,
                                opacity: 1,
                            },
                            next: nextSlideConfig,
                        },
                        slidesPerView: "auto",
                        autoplay: {
                            delay: 8000,
                        },
                        watchSlidesVisibility: true,
                        watchSlidesProgress: true,
                        navigation: {
                            nextEl: ".index-hero-swiper-button-next",
                            prevEl: ".index-hero-swiper-button-prev",
                        },
                    });

                    slides.slideToLoop(activeSlideIndex, 0);
                }
            }

            onWindowResize(initializeSwiper, (delay = 500));
        });
    }
});

// PROGRAM SLIDE
jQuery(document).ready(function () {
    // Get Title Offset
    if ($(".index-program .sc-title").length) {
        function setSlideNavTopOffset() {
            const titleHeight = $(".index-program .sc-title").outerHeight();
            $(".index-program").css("--title-top-offset", titleHeight + "px");
        }

        onWindowResize(setSlideNavTopOffset);
    }

    // Swiper
    if ($(".index-program .swiper").length) {
        $(".index-program .swiper").each(function () {
            const _this = $(this);

            function initializeSwiper() {
                const slides = new Swiper(_this[0], {
                    speed: 800,
                    slidesPerView: "auto",
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    loop: true,
                    navigation: {
                        nextEl: ".index-program-swiper-button-next",
                        prevEl: ".index-program-swiper-button-prev",
                    },
                });
            }

            onWindowResize(initializeSwiper);
        });

        const $indexProgram = $(".index-program");
        const $swiperSlides = $(".index-program .swiper-slide");

        if ($indexProgram.length && $swiperSlides.length) {
            $swiperSlides.on("mouseenter", function () {
                $indexProgram.addClass("hovering");
            });

            $swiperSlides.on("mouseleave", function () {
                $indexProgram.removeClass("hovering");
            });
        }
    }
});

// CONNECTING CURVE
jQuery(document).ready(function () {
    $(".program-and-banner").each(function () {
        const _this = $(this);
        const scInner = _this.find(".sc-inner");
        const program = _this.find(".index-program");
        const banner = _this.find(".video-banner");

        function setCurveHeight() {
            const programTitleHeaight = program.find(".sc-title").outerHeight();
            const curveHeight =
                program.outerHeight() + banner.outerHeight() / 2;
            const scInnerLeft = scInner.offset().left;

            _this.css("--connect-curve-left", scInnerLeft + "px");
            _this.css("--connect-curve-top", programTitleHeaight / 2 + "px");
            _this.css("--connect-curve-height", curveHeight + "px");
        }

        onWindowResize(setCurveHeight);
    });
});

// SPONSER
jQuery(document).ready(function () {
    $(".index-sponser .swiper").each(function () {
        const _this = $(this);

        const slides = new Swiper(_this[0], {
            speed: 800,
            slidesPerView: "auto",
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".index-sponser-swiper-button-next",
                prevEl: ".index-sponser-swiper-button-prev",
            },
            centerInsufficientSlides: true,
            autoplay: {
                delay: 5000,
            },
        });
    });
});

/* ===== TEMPLATE SECTION ======================================== */
// MAIN MEDIA PLAY PAUSE BUTTON
jQuery(document).ready(function () {
    $(".play-pause-button").on("click", function () {
        const video = $(this).closest(".media").find("video")[0];

        $(this).toggleClass("playing");

        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
    });
});

// PROGRAM AUTOPLAY VIDEO ON HOVER
jQuery(document).ready(function ($) {
    function playVideo(element) {
        var videoElement = element.find("video");
        var iframeElement = element.find(".video-iframe");

        if (videoElement.length) {
            videoElement[0].play();
        } else if (iframeElement.length) {
            var src = iframeElement.attr("src");
            if (!src.includes("autoplay=1")) {
                src = src.replace("autoplay=0", "autoplay=1");
                iframeElement.attr("src", src);
            }
        }
    }

    function pauseVideo(element) {
        var videoElement = element.find("video");
        var iframeElement = element.find(".video-iframe");

        if (videoElement.length) {
            videoElement[0].pause();
        } else if (iframeElement.length) {
            var src = iframeElement.attr("src");
            if (src.includes("autoplay=1")) {
                src = src.replace("autoplay=1", "autoplay=0");
                iframeElement.attr("src", src);
            }
        }
    }

    $(".program-item").on("mouseenter touchstart", function (e) {
        playVideo($(this));
    });

    $(".program-item").on("mouseleave touchend", function (e) {
        pauseVideo($(this));
    });
});
