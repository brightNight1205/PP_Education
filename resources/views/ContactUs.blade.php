<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu-Guide - Contact Us</title>
    <!-- Tailwind CSS CDN (load first) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Your custom CSS (load after Tailwind) -->
    <link rel="stylesheet" href="/CSS/ContactUs.css">
    <link rel="stylesheet" href="/CSS/HomePage.css">
    <link rel="stylesheet" href="/CSS/Notification.css">
    <!-- JS files -->
    <script src="/Javascript/ContactUs.js"></script>
    <script src="/Javascript/HomePage.js"></script>
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- CSRF Token for AJAX -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    {{-- Include the navigation bar --}}
    @include('layouts.navigation')

    <div class="form-container">
        <h2>Contact Us</h2>
        <!-- Notification panel -->
        <div id="notificationPanel" class="notification"></div>

        <form id="contactForm" method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email Address<span>*</span></label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required />
                <div id="email-error" class="error-message">Please enter a valid email address</div>
            </div>
            <div class="form-group">
                <label for="university">University<span>*</span></label>
                <select id="university" name="university" required>
                    <option value="">Select a university</option>
                    @foreach ($universities as $university)
                        <option value="{{ $university->UniversityID }}">{{ $university->Name }}</option>
                    @endforeach
                </select>
                <div id="university-error" class="error-message">Please select a university</div>
            </div>
            <div class="form-group">
                <label for="major">Major you want to study<span>*</span></label>
                <select id="major" name="major" required>
                    <option value="">Select a major</option>
                </select>
                <div id="major-error" class="error-message">Please select a major</div>
            </div>
            <div class="form-group">
                <label for="description">Describe<span>*</span></label>
                <textarea id="description" name="description" placeholder="Tell us more about your inquiry" required></textarea>
                <div id="description-error" class="error-message">Please enter a description</div>
            </div>
            <button class="btn-contact" type="submit">Contact me now</button>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const universitySelect = document.getElementById("university");
            const majorSelect = document.getElementById("major");
            const notificationPanel = document.getElementById("notificationPanel");

            universitySelect.addEventListener("change", function () {
                const universityId = this.value;
                majorSelect.innerHTML = '<option value="">Select a major</option>';

                if (universityId) {
                    fetch(`/majors/${universityId}`)
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(major => {
                                const option = document.createElement("option");
                                option.value = major.MajorID;
                                option.textContent = major.Name;
                                majorSelect.appendChild(option);
                            });
                        })
                        .catch(error => {
                            console.error('Error fetching majors:', error);
                        });
                }
            });

            const contactForm = document.getElementById("contactForm");
            contactForm.addEventListener("submit", function (event) {
                event.preventDefault(); // Prevent the default form submission

                // Send form data using Fetch API
                fetch(contactForm.action, {
                    method: 'POST',
                    body: new FormData(contactForm),
                })
                .then(response => {
                    if (response.ok) {
                        notificationPanel.className = 'notification success';
                        notificationPanel.textContent = 'Your form has been submitted successfully!';
                    } else {
                        notificationPanel.className = 'notification error';
                        notificationPanel.textContent = 'There was an error submitting your form. Please try again.';
                    }
                    notificationPanel.style.display = 'block'; // Show notification
                })
                .catch(error => {
                    notificationPanel.className = 'notification error';
                    notificationPanel.textContent = 'An error occurred. Please try again later.';
                    notificationPanel.style.display = 'block'; // Show notification
                    console.error('Error:', error);
                });
            });
        });
    </script>
</body>
</html>
