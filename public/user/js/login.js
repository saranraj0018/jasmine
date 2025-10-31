$(document).ready(function () {

  $("#loginBtn, #loginBtnMobile").click(function () {
    $("#loginModal").removeClass("hidden");
  });

  $("#closeModal").click(function () {
    $("#loginModal").addClass("hidden");
  });

  // close on background click
  $("#loginModal").click(function (e) {
    if ($(e.target).is("#loginModal")) {
      $("#loginModal").addClass("hidden");
    }
  });

});
