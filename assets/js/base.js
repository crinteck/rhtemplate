$.toast = $.fn.toast;
document.addEventListener("DOMContentLoaded", () => {
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
        url: `${window.location.origin}/public/assets/semantic-ui/js/fr-FR.json`,
    },
  });
  $(".message .close").on("click", function () {
    $(this).closest(".message").transition("fade");
  });

  $(".ui.checkbox").checkbox();

  $("#toggle-sidebar").click(function () {
    $(".ui.sidebar").sidebar("toggle");
  });

  $(".ui.dropdown").dropdown();

  const url = window.location.href;
  const activePage = url;
  $(".ui.vertical.menu a.item").each(function () {
    const linkPage = this.href;

    if (activePage == linkPage) {
      $(this).addClass("active");
    }
  });

  $(".ui.accordion").accordion();

  $(".tabular.menu .item")?.tab();
});
