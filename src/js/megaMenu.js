($ => {
  $(document).ready(() => {
    const parentEls = $(".torque-mega-menu-parent-item");

    parentEls.each(function() {
      const parent = $(this);
      const parentClickEl = parent.find(".torque-mega-menu-item-title-parent");

      parentClickEl.click(event => {
        const hasChildren = parent.hasClass("has-children");

        if (!hasChildren) {
          return;
        }

        event.preventDefault();

        parent.toggleClass("show-children");
      });
    });
  });
})(jQuery);
