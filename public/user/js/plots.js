$(document).ready(function () {

  // ===== Modal Open/Close Functions =====
  function openModal() {
    $("#adModal").removeClass("hidden").addClass("flex");
  }

  function closeModal() {
    $("#adModal").addClass("hidden").removeClass("flex");
  }

  // ✅ Open buttons (single handler for all)
  $("[id^='openAdModalBtn']").click(function () {
    openModal();
  });

  // ✅ Close buttons (single handler for all)
  $("[id^='closeAdModalBtn']").click(function () {
    closeModal();
  });

  // ✅ Close when clicking outside modal
  $(window).click(function (e) {
    if ($(e.target).is("#adModal")) {
      closeModal();
    }
  });

  // ✅ Redirect to Pole Ads Page
  $("#poleAdsLink").click(function () {
    window.location.href = "/Pole-Ads"; // Use route URL
  });

  // ===== Filter Dropdown =====
  const filterBtn = $("#filterBtn");
  const filterMenu = $("#filterMenu");

  filterBtn.click(function () {
    filterMenu.toggleClass("hidden");
  });

  $(window).click(function (e) {
    if (!filterBtn.is(e.target) && !filterMenu.is(e.target) && filterMenu.has(e.target).length === 0) {
      filterMenu.addClass("hidden");
    }
  });

});
