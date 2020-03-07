export default {
  init() {
    // JavaScript to be fired on all pages
    $('.navbar-burger').on('click', () => toggleMenu());

    const toggleMenu = () => {
      // Toggle the 'is-active' class on both the 'navbar-burger' and the 'navbar-menu'
      $('.navbar-burger').toggleClass('is-active');
      $('.navbar-menu').toggleClass('is-active');
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
