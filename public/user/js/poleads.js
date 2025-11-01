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