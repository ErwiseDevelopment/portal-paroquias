//banner
const swiperBanner = new Swiper( '.js-swiper-banner', {
    loop: true,

    autoplay: {
        delay: 6000,
        disableOnInteraction: false
    }
});

//about
const swiperAbout = new Swiper( '.js-swiper-about', {
    breakpoints: {
        320: {
            slidesPerView: 1,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },

        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-about',
        nextEl: '.js-swiper-button-next-about',
    }
})

//calendar
const swiperMonth = new Swiper( '.js-swiper-month', {
    allowTouchMove: false,

    navigation: {
        prevEl: '.js-swiper-button-prev-calendar',
        nextEl: '.js-swiper-button-next-calendar'
    }
})

//calendar day
const swiperDay = new Swiper( '.js-swiper-day', {
    allowTouchMove: false,
    
    navigation: {
        prevEl: '.js-swiper-button-prev-calendar',
        nextEl: '.js-swiper-button-next-calendar'
    }
})

//videos
const swiperVideos = new Swiper( '.js-swiper-videos', {
    navigation: {
        prevEl: '.js-swiper-button-prev-videos',
        nextEl: '.js-swiper-button-next-videos'
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
        },

        768: {
            slidesPerView: 3,
            spaceBetween: 6,
        }
    }
}) 