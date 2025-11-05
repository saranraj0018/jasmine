  let progress = 0;

  $("#increaseBtn").click(function () {
    if (progress < 100) {
      progress += 10;
      $("#progressBar").css("width", progress + "%");
      $("#progressText").text(progress + "%");
    }
  });
  //contact form//
  $("#contactForm").submit(function (e) {
    e.preventDefault();
    let name = $("#name").val().trim();
    let phone = $("#phone").val().trim();
    let email = $("#email").val().trim();
    let subject = $("#subject").val().trim();

    if (!name || !phone || !email || !subject) {
        alert("Please fill out all fields!");
        return;
    }

    alert("✅ Message Sent Successfully!");
});