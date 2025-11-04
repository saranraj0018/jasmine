  let progress = 0;

  $("#increaseBtn").click(function () {
    if (progress < 100) {
      progress += 10;
      $("#progressBar").css("width", progress + "%");
      $("#progressText").text(progress + "%");
    }
  });