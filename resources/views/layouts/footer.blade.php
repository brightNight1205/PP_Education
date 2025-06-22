<!-- Import Alpine.js and custom CSS -->
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<link rel="stylesheet" href="/CSS/Homepage.css">

<!-- Footer -->
    <div class="box">
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                    <h3>About</h3>
                    <ul>
                        <li><a href="{{ route('aboutus') }}">About Us</a></li>
                        <li><a href="{{ route('contact.create') }}">Contact Us</a></li>
                        <li><a href="{{ route('feedback') }}">Feedback Error</a></li>
                    </ul>
                </div>
                <div class="footer-section reference">
                    <h3>Reference</h3>
                    <ul>
                        <li><a href="#">4ICU</a></li>
                        <li><a href="#">Cambodia Education Info</a></li>
                        <li><a href="#">EduRank</a></li>
                        <li><a href="#">Times Higher Education</a></li>
                    </ul>
                </div>
                <div class="footer-section logo">
                    <img src="../Images/Logo.png" alt="EduGuide Logo">
                    <div class="logo-text">
                        <h3>EduGuide</h3>
                        <p>in CAMBODIA</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <p>Copyright © 2024 Edu-Guide. All rights reserved.</p>
            </div>
        </div>
    </div>
