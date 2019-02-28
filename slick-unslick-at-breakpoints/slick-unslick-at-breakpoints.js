const settings = {
     // default settings
    responsive: [
        {
            breakpoint: 900,
            settings: { slidesToShow: 3 }
        },
        {
            breakpoint: 600,
            settings: { slidesToShow: 2 }
        },
        {
            breakpoint: 420,
            settings: "unslick"
        }
   ]
};

const sl =  $('.slider').slick(settings);

$(window).on('resize', function() {
   if( $(window).width() > 420 &&  !sl.hasClass('slick-initialized')) {
         $('.slider').slick(settings);
    }
});
