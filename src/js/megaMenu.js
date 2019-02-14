($ => {
  $(document).ready(() => {
    const parentEls = $(".torque-mega-menu-parent-item");

    parentEls.each(function() {
      const parent = $(this);

      parent.click(event => {
        const childrenElsWrapper = parent.find(
          ".mega-menu-child-items-wrapper"
        );

        if (!childrenElsWrapper.length) {
          return;
        }

        event.stopPropagation();
        event.preventDefault();

        parent.toggleClass("show-children");
      });
    });
  });
})(jQuery);
