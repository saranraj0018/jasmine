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

//slot-booking
$(document).ready(function () {

    let selectedSeats = [];

    $('.seat-btn').on('click', function () {
        const seat = $(this).data('seat');

        if (selectedSeats.includes(seat)) {
            // Remove seat
            selectedSeats = selectedSeats.filter(s => s !== seat);

            $(this)
                .removeClass('bg-blue-600 text-white border-blue-600')
                .addClass('border-gray-300 text-gray-600');

        } else {
            // Add seat
            selectedSeats.push(seat);

            $(this)
                .addClass('bg-blue-600 text-white border-blue-600')
                .removeClass('border-gray-300 text-gray-600');
        }

        $('#selectedSeats').val(selectedSeats.join(','));
    });

});

