($ => {
  $(document).ready(() => {
    const MAX_OPACITY_AT_SCROLL = 100;

    updateOpacity($(window).scrollTop());

    $(window).scroll(handleScroll);

    function handleScroll() {
      const newScroll = $(window).scrollTop();

      if (newScroll > MAX_OPACITY_AT_SCROLL) return;

      updateOpacity(newScroll);
    }

    function updateOpacity(newScroll) {
      const background = $(".header-background-color");
      const opacity = Math.min(newScroll / MAX_OPACITY_AT_SCROLL, 1);

      background.css({ opacity });
    }
  });
})(jQuery);
