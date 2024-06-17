const hero = new Swiper( ".swiper-hero" , {
    slidesPerView : 3,
    cssMode: true,
    spaceBetween : 15,
    loop: true,

    breakpoints: {
        360:{
            slidesPerView : 1,
            cssMode: true,
            spaceBetween : 0,
        },
        640:{
            slidesPerView : 3,
            cssMode: true,
            spaceBetween :15,
        }
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
})