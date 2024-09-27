var swiper = new Swiper(".myswiper",
{
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteration: false,
    },
    slidesPerview: 1,
    spaceBetween: 10,
    pagination: {
        el:".swiper-pagination",
        clickable: true,
    },
    breakpoints:{
        640:{
            slidesPerview: 2,
            spaceBetween: 20,
        },
        768:{
            slidesPerview: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerview: 3,
            spaceBetween:50,
        }
    }
})