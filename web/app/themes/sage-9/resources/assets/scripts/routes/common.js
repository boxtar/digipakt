export default {
  init() {
    // JavaScript to be fired on all pages
    $('.mobile').on('click', function() {
      $('.navlist').toggleClass('active');
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
