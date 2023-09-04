var swiper = new Swiper(".slide-content", {
    sliderPerView:3,
    spaceBetween:25,
    // slidesPerGroup:3,
    slidesPerGroup:1,
    loop:false,
    //centerSlide:'true',
    // loopFillGroupWithBlank: 'true',
    fade:'true',
    grabCursor:'true',
    pagination:{
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation:{
        nextE1: ".swiper-button-next",
        prevE1: ".swiper-button-prev",
    },

    breakpoints:{
        0:{
            slidesPerView:1,
        },
        520:{
            slidesPerView:2,
        },
        950:{
            slidesPerView:3,
        },
    },

});