($ => {
  $(document).ready(() => {
    const entry = $("#mega-menu");
    const parentEls = $(".torque-mega-menu-parent-item");
    const childrenWrappers = $(
      ".parent-items-wrapper .mega-menu-child-items-wrapper, .children-items-wrapper .mega-menu-child-items-wrapper, .children-items-wrapper .children-items-title"
    );

    const state = { currentParent: {}, curentParentId: 0 };

    parentEls.each(function() {
      const parent = $(this);
      const parentClickEl = parent.find(".torque-mega-menu-item-title-parent");

      parentClickEl.click(event => {
        const hasChildren = parent.hasClass("has-children");

        if (!hasChildren) {
          return;
        }

        event.preventDefault();

        parentId = parent.attr("data-id");

        const isNewParent = parentId != state.currentParentId;

        console.log(parentId, state.currentParentId, isNewParent);

        childrenWrappers.each(function() {
          if ($(this).attr("data-parent-id") == parentId) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });

        if (isNewParent) {
          entry.addClass("children-open");
          parent.addClass("show-children");
          state.currentParent.removeClass &&
            state.currentParent.removeClass("show-children");
        } else {
          entry.toggleClass("children-open");
          parent.toggleClass("show-children");
        }

        state.currentParent = parent;
        state.currentParentId = parentId;
      });
    });
  });
})(jQuery);
