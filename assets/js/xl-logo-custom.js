(function(){
    'use strict';
    jQuery(document).ready(function($) {
        $('.xl-logo').owlCarousel({
            loop: true,
            margin: 20,
            dots: true,
            autoplay: true,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2
                },
                400: {
                    items: 3
                },
                920: {
                    items: 4
                },
                1120: {
                    items: 5
                }
            }
        });
    });
})();