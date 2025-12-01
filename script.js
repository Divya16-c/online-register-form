// Simple client-side validation using jQuery
$(document).ready(function () {
    $("#registrationForm").on("submit", function (e) {
        let isValid = true;

        // Clear old errors
        $(".error-message").text("");
        $("input, select, textarea").removeClass("error");

        // Full Name
        const fullName = $("#fullName").val().trim();
        if (fullName === "") {
            showError("#fullName", "Full Name is required");
            isValid = false;
        }

        // Email
        const email = $("#email").val().trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "") {
            showError("#email", "Email is required");
            isValid = false;
        } else if (!emailPattern.test(email)) {
            showError("#email", "Please enter a valid email");
            isValid = false;
        }

        // Phone (simple 10-digit check)
        const phone = $("#phone").val().trim();
        const phonePattern = /^[0-9]{10}$/;
        if (phone === "") {
            showError("#phone", "Phone number is required");
            isValid = false;
        } else if (!phonePattern.test(phone)) {
            showError("#phone", "Enter a valid 10-digit number");
            isValid = false;
        }

        // Gender
        if ($("input[name='gender']:checked").length === 0) {
            $("input[name='gender']").addClass("error");
            $("input[name='gender']").closest(".form-group")
                .find(".error-message").text("Please select gender");
            isValid = false;
        }

        // DOB
        const dob = $("#dob").val();
        if (dob === "") {
            showError("#dob", "Date of Birth is required");
            isValid = false;
        }

        // Course
        const course = $("#course").val();
        if (course === "") {
            showError("#course", "Please select a course");
            isValid = false;
        }

        // Address
        const address = $("#address").val().trim();
        if (address === "") {
            showError("#address", "Address is required");
            isValid = false;
        }

        // Terms checkbox
        if (!$("#agree").is(":checked")) {
            $("#agree").addClass("error");
            $("#agree").closest(".form-group")
                .find(".error-message").text("You must confirm the information is correct");
            isValid = false;
        }

        // If form is invalid, prevent submission
        if (!isValid) {
            e.preventDefault();
        }
    });

    // Helper to show error for a particular input
    function showError(selector, message) {
        $(selector).addClass("error");
        $(selector).closest(".form-group").find(".error-message").text(message);
    }
});
