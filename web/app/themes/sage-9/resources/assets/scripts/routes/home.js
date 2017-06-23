export default {
  init() {
    // JavaScript to be fired on the home page
    $('.SlickTestimonials').slick({
      "centerMode": true,
      "slidesToShow": 2,
      "nextArrow": '<i class="fa fa-2x fa-chevron-right"></i>',
      "prevArrow": '<i class="fa fa-2x fa-chevron-left"></i>',
      "appendArrows": $('#SlickArrowAnchor'),
      "responsive": [{
          "breakpoint": 1199,
          "settings": {
            "centerMode": false,
          },
        },
        {
          "breakpoint": 991,
          "settings": {
            "centerMode": true,
            "slidesToShow": 2,
          },
        },
        {
          "breakpoint": 767,
          "settings": {
            "centerMode": false,
            "slidesToShow": 1,
            "autoplay": true,
            "autoplaySpeed": 3500,
          },
        },
      ],
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
