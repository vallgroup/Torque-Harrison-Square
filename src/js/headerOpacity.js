($ => {
  $(document).ready(() => {
    const OPAQUE_AT_SCROLL = 100;
    const TOGGLE_CLASS = "is-opaque";

    const background = $(".header-background-color");
    const state = { isOpaque: false };

    if (!background.length) {
      return;
    }

    updateState();
    $(window).scroll(updateState);

    function updateState() {
      const currentScroll = $(window).scrollTop();

      if (currentScroll >= OPAQUE_AT_SCROLL) {
        updateOpaque(true);
      } else {
        updateOpaque(false);
      }
    }

    function updateOpaque(newOpaque) {
      if (newOpaque === state.isOpaque) return;

      newOpaque
        ? background.addClass(TOGGLE_CLASS)
        : background.removeClass(TOGGLE_CLASS);

      state.isOpaque = newOpaque;
    }
  });
})(jQuery);
