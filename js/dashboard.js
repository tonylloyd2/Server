$(document).ready(function() {
    // Toggle side panel on hamburger menu click
    $(".hamburger-menu").click(function() {
      $(".side-panel").toggleClass("side-panel-collapsed");
    });

    // Collapse side panel on window resize if resolution is below 720px
    $(window).resize(function() {
      if ($(window).width() < 720) {
        $(".side-panel").addClass("side-panel-collapsed");
      } else {
        $(".side-panel").removeClass("side-panel-collapsed");
      }
    });
  });