<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="/CSS/ContactUs.css">
    <style>
        /* Notification styles */
        .notification {
            display: none;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }

        .notification.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .notification.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <a href="{{ route('home') }}"  class="back-arrow">&#8592;</a>
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
            <button type="submit">Contact me now</button>
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