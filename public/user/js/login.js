$(document).ready(function() {
      // === LOGIN POPUP ===
      $("#loginBtn").click(function() {
        $("#loginPopup").fadeIn(200);
        $("#loginPopup .popup-content").addClass("popup-show");
      });

      $("#closeLogin").click(function() {
        $("#loginPopup .popup-content").removeClass("popup-show");
        setTimeout(() => $("#loginPopup").fadeOut(200), 150);
      });

      // === SIGNUP POPUP ===
      $("#signupBtn").click(function() {
        $("#signupPopup").fadeIn(200);
        $("#signupPopup .popup-content").addClass("popup-show");
      });

      $("#closeSignup").click(function() {
        $("#signupPopup .popup-content").removeClass("popup-show");
        setTimeout(() => $("#signupPopup").fadeOut(200), 150);
      });

      // === CLICK OUTSIDE TO CLOSE ===
      $(window).click(function(e) {
        if ($(e.target).is("#loginPopup")) {
          $("#loginPopup .popup-content").removeClass("popup-show");
          setTimeout(() => $("#loginPopup").fadeOut(200), 150);
        }
        if ($(e.target).is("#signupPopup")) {
          $("#signupPopup .popup-content").removeClass("popup-show");
          setTimeout(() => $("#signupPopup").fadeOut(200), 150);
        }
      });
    });