$(".owl-carousel.auto").owlCarousel({
    margin:13,
    loop: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 4000,
    navText : ["<ion-icon name='chevron-back-outline'></ion-icon>","<ion-icon name='chevron-forward-outline'></ion-icon>"],
    responsive:{
        0:{
            items:2
        },
        576: {
            items:3
        },
        768:{
            items:4
        },
        1000:{
            items:6
        }
    }
});
$(".owl-carousel.noauto6").owlCarousel({
    margin:13,
    loop: true,
    nav: false,
    autoplay: false,
    autoplayTimeout: 4000,
    navText : ["<ion-icon name='chevron-back-outline'></ion-icon>","<ion-icon name='chevron-forward-outline'></ion-icon>"],
    responsive:{
        0:{
            items:2
        },
        576: {
            items:3
        },
        768:{
            items:4
        },
        1000:{
            items:6
        }
    }
});