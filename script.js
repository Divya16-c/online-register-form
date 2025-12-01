$(function () {
    $("#registrationForm").on("submit", function (e) {
        let isValid = true;

        // Helper to show error
        function setError(id, message) {
            const wrapper = $(id).closest(".form-group");
            wrapper.addClass("error");
            wrapper.find("small.error").text(message);
            isValid = false;
        }

        // Clear all previous errors
        $(".form-group").removeClass("error");
        $("small.error").text("");

        const name = $("#fullName").val().trim();
        const email = $("#email").val().trim();
        const phone = $("#phone").val().trim();
        const course = $("#course").val().trim();
        const department = $("#department").val().trim();
        const semester = $("#semester").val().trim();
        const reason = $("#reason").val().trim();

        // Name
        if (name.length < 3) {
            setError("#fullName", "Please enter your full name (min 3 characters).");
        }

        // Email (simple regex)
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            setError("#email", "Enter a valid email address.");
        }

        // Phone (10 digits)
        const phonePattern = /^[0-9]{10}$/;
        if (!phonePattern.test(phone)) {
            setError("#phone", "Phone number must be 10 digits.");
        }

        if (course === "") {
            setError("#course", "Please select a course.");
        }

        if (department === "") {
            setError("#department", "Please select a department.");
        }

        if (semester === "") {
            setError("#semester", "Please select a semester.");
        }

        if (reason.length < 10) {
            setError("#reason", "Please provide at least 10 characters.");
        }

        if (!isValid) {
            e.preventDefault(); // stop form submission if error
        }
    });

    // Remove error on change / typing
    $("input, select, textarea").on("input change", function () {
        const wrapper = $(this).closest(".form-group");
        wrapper.removeClass("error");
        wrapper.find("small.error").text("");
    });
});
