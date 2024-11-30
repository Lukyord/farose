// var path = document.querySelector(".path.test");
// var length = path.getTotalLength();
// console.log(length);

// DASHLINE ANIMATE PATH
jQuery(function ($) {
    if ($(".path").length) {
        $(".path").each(function () {
            var $path = $(this);

            const path = $path;
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
            var $line = $(this);

            const line = $line;
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

/* ===== INDEX ======================================== */
// DARA GRID
jQuery(function ($) {
    let curveConnectNumber = 0;
    const $wrapper = $(".dara-grid-wrapper");
    const cover = "./assets/img/design/dara-curve-connect.svg";
    const coverM = "./assets/img/design/dara-curve-connect-m.svg";
    const curveConnectHTML = `
                <div class="curve-connect">
                    <picture class="object">
                        <source media="(min-width:836px)" srcset="${cover}">
                        <source media="(min-width:0px)" srcset="${coverM}">
                        <img src="${cover}" alt="Hero Background" loading="lazy" draggable="false">
                    </picture>
                </div>
            `;

    function updateRowNumber() {
        const totalDara = parseInt($(".dara-grid-wrapper").data("total-dara"));
        const divideBy = $(window).width() <= 835 ? 3 : 7;
        const rowNumber = Math.ceil(totalDara / divideBy);
        $(".dara-grid-wrapper").css("--row-number", rowNumber);
        curveConnectNumber = rowNumber - 1;

        $wrapper.find(".curve-connect").remove();

        for (let i = 0; i < curveConnectNumber; i++) {
            $wrapper.prepend(curveConnectHTML);
        }
    }

    onWindowResize(updateRowNumber);
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
                                opacity: 0,
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

            const slides = new Swiper(_this[0], {
                speed: 800,
                slidesPerView: "auto",
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                navigation: {
                    nextEl: ".index-program-swiper-button-next",
                    prevEl: ".index-program-swiper-button-prev",
                },
            });
        });
    }
});
