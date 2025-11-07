$(document).ready(function() {

    const $filterBtn = $('#filterBtn');
    const $filterMenu = $('#filterMenu');

    // Toggle dropdown on click
    $filterBtn.on('click', function(e) {
        e.stopPropagation(); 
        $filterMenu.toggleClass('hidden');
    });

    // Close dropdown when clicking outside
    $(window).on('click', function(e) {
        if (!$(e.target).closest('#filterBtn, #filterMenu').length) {
            $filterMenu.addClass('hidden');
        }
    });

    // Open modal
    window.openSelectSlotModal = function(areaName) {
        $('#slotModal').removeClass('hidden').addClass('flex');
        $('#slotModalTitle').text(`Select Slots for ${areaName}`);
        $('#premiumLink').attr('href', `/book/${encodeURIComponent(areaName)}?type=premium`);
        $('#exclusiveLink').attr('href', `/book/${encodeURIComponent(areaName)}?type=exclusive`);
    }

    // Close modal
    window.closeSlotModal = function() {
        $('#slotModal').addClass('hidden').removeClass('flex');
    }

    // Close modal by clicking outside
    $(window).on('click', function(e) {
        const modal = $('#slotModal')[0];
        if (e.target === modal) closeSlotModal();
    });

});

// select slots //
$(document).ready(function () {

    const $modal = $('#bookingModal');
    const $lightingBtns = $('.lighting-btn');
    const $typeCards = $('.type-card');
    const $sizeBtns = $('.size-btn');

    const $lightingInput = $('#lightingInput');
    const $typeInput = $('#typeInput');
    const $sizeInput = $('#sizeInput');

    window.openBookingModal = function () {
        $modal.removeClass('hidden').addClass('flex');
    };

    window.closeBookingModal = function () {
        $modal.addClass('hidden').removeClass('flex');
    };

    // Lighting selection
    $lightingBtns.on('click', function () {

        $lightingBtns.removeClass("active bg-gradient-to-r from-[#e6f7ff] to-[#ccebff] shadow-md");

        $(this).addClass("active bg-gradient-to-r from-[#e6f7ff] to-[#ccebff] shadow-md");

        $lightingInput.val($(this).data("value"));
    });

    // Type selection
    $typeCards.on('click', function () {
        $typeCards.removeClass('border-blue-700');
        $(this).addClass('border-blue-700');
        $typeInput.val($(this).data('value'));
    });

    // Size selection
    $sizeBtns.on('click', function () {
        $sizeBtns.removeClass("active bg-gradient-to-r from-[#e6f7ff] to-[#ccebff] shadow-md");
        $(this).addClass("active bg-gradient-to-r from-[#e6f7ff] to-[#ccebff] shadow-md");
        $sizeInput.val($(this).data("value"));
    });

    // Close modal when clicking outside
    $(window).on('click', function (e) {
        if (e.target === $modal[0]) {
            closeBookingModal();
        }
    });

});

//visual duration popup//
function openBookingModal() {
    document.getElementById("bookingModal").classList.remove("hidden");
}
function closeBookingModal() {
    document.getElementById("bookingModal").classList.add("hidden");
}
function openBookingModal1() {
    document.getElementById("bookingModal").classList.remove("hidden");
}
function closeBookingModal1() {
    document.getElementById("bookingModal").classList.add("hidden");
}
function openBookingModal2() {
    document.getElementById("bookingModal").classList.remove("hidden");
}
function closeBookingModal2() {
    document.getElementById("bookingModal").classList.add("hidden");
}
function openBookingModal3() {
    document.getElementById("bookingModal").classList.remove("hidden");
}
function closeBookingModal3() {
    document.getElementById("bookingModal").classList.add("hidden");
}
function openBookingModal4() {
    document.getElementById("bookingModal").classList.remove("hidden");
}
function closeBookingModal4() {
    document.getElementById("bookingModal").classList.add("hidden");
}
 function showReviewSection() {
    document.getElementById("chooseDuration").classList.add("hidden");
    document.getElementById("reviewSection").classList.remove("hidden");
  }
//payment//
function open() {
    document.getElementById("bookingModal").classList.remove("hidden");
}
function close() {
    document.getElementById("bookingModal").classList.add("hidden");
}

//my_booking//
$(".card").click(function () {
    $(".card").removeClass("card-active");
    $(this).addClass("card-active");
});
//profile//
$(document).ready(function(){
  $(".menu-item").click(function(){
    $(".menu-item").removeClass("bg-blue-100 text-blue-700 font-medium");
    $(this).addClass("bg-blue-100 text-blue-700 font-medium");

    var target = $(this).data("target");
    $(".content-section").hide(); 
    $(target).fadeIn(300);
  });
});
//visualmarkers//
 $(document).ready(function() {
      // Open first popup
      $("#openFirstPopup").click(function() {
        $("#popup1").fadeIn(200);
        $("#popup1 .popup-content").addClass("popup-show");
      });

      // Close first popup
      $("#closePopup1").click(function() {
        $("#popup1 .popup-content").removeClass("popup-show");
        setTimeout(() => $("#popup1").fadeOut(200), 150);
      });

      // Move from popup1 -> popup2
      $("#reviewPay").click(function() {
        const selected = $("input[name='duration']:checked").val();
        $("#durationText").text(selected);
        $("#popup1 .popup-content").removeClass("popup-show");
        setTimeout(() => {
          $("#popup1").fadeOut(200);
          $("#popup2").fadeIn(200);
          $("#popup2 .popup-content").addClass("popup-show");
        }, 200);
      });

      // Close popup2
      $("#closePopup2").click(function() {
        $("#popup2 .popup-content").removeClass("popup-show");
        setTimeout(() => $("#popup2").fadeOut(200), 150);
      });

      // Close if click outside
      $(window).click(function(e) {
        if ($(e.target).is("#popup1")) $("#closePopup1").click();
        if ($(e.target).is("#popup2")) $("#closePopup2").click();
      });
    });

    const dataitems = [
  { title: "Valankulam", seats: 10, image: "./img/visual.png", place: "Periyakulam Lake" },
  { title: "Race Course", seats: 8, image: "./img/visual.png", place: "Avinashi Road" },
];

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".openBookingPopup").forEach(button => {
        button.addEventListener("click", () => {
            const title = button.dataset.title;
            const place = button.dataset.place;
            const image = button.dataset.image;
            const url = button.dataset.url;

            document.getElementById("popup2Title").textContent = title;
            document.getElementById("popup2Place").textContent = place;
            document.getElementById("popup2Image").src = image;
            document.getElementById("popup2Url").href = url;

            document.getElementById("popup2").classList.remove("hidden");
        });
    });

    document.getElementById("closePopup2").addEventListener("click", () => {
        document.getElementById("popup2").classList.add("hidden");
    });
});

