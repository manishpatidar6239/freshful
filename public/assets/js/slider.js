const heroSwiper = new Swiper('.heroSwiper', {
    loop: true,
    autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false
    },
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    }
})

const categorySwiper = new Swiper('.categorySwiper', {
    slidesPerView: 9,
    spaceBetween: 5,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 6
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 6
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 9
        }
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    }
})

const viewProductSwiper = new Swiper('.viewProductSwiper', {
    slidesPerView: 10,
    spaceBetween: 10,
    slidesPerGroup: 4,
    loopFillGroupWithBlank: true,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 6
        },
        // when window width is >= 480px
        480: {
            slidesPerView:6
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 10
        }
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    }
})

const bestSellerSwiper = new Swiper('.bestSellerSwiper', {
    slidesPerView: 3,
    spaceBetween: 20,
    autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 1
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 2
        },
        767: {
            slidesPerView: 3
        }
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    }
})
