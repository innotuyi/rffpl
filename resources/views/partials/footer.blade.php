<footer class="text-white" style="background-color: purple; padding: 30px 0;">
    <div class="container">
        <div class="row">
            <!-- Footer Links -->
            <div class="col-md-4 mb-3 mb-md-0">
                <ul class="list-unstyled">
                    <li><a href="/about" class="text-white me-3">About Us</a></li>
                    <li><a href="/programs" class="text-white me-3">Programs</a></li>
                    <li><a href="/blog" class="text-white me-3">Blog</a></li>
                    <li><a href="/contact" class="text-white me-3">Contact</a></li>
                    <li><a href="#" class="text-white">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Social Media Icons -->
            <div class="col-md-4 mb-3 mb-md-0 text-center">
                <a href="#" class="social-icon"
                    style="background-color: #67B7D1; border-radius: 50%; padding: 10px; margin-right: 8px; color: white; text-decoration: none; font-size: 1.2rem;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon"
                    style="background-color: #67B7D1; border-radius: 50%; padding: 10px; margin-right: 8px; color: white; text-decoration: none; font-size: 1.2rem;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon"
                    style="background-color: #67B7D1; border-radius: 50%; padding: 10px; margin-right: 8px; color: white; text-decoration: none; font-size: 1.2rem;">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon"
                    style="background-color: #67B7D1; border-radius: 50%; padding: 10px; margin-right: 8px; color: white; text-decoration: none; font-size: 1.5rem;">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>

            <!-- Newsletter Signup -->
            <div class="col-md-4">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Your email address"
                            style="border-radius: 20px; padding: 10px; margin-right: 1rem" required>
                        <button class="btn" type="submit"
                            style="background-color: green; border-radius: 20px; color: white; padding: 10px 20px;">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer Bottom Text -->
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <p>&copy; {{ date('Y') }} RYFPL. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- FontAwesome CDN for icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

<script>
    function toggleReadMore(postId) {
        const excerpt = document.getElementById('excerpt' + postId);
        const fullContent = document.getElementById('fullContent' + postId);
        const btn = event.target; // Get the clicked button

        if (fullContent.style.display === 'none') {
            fullContent.style.display = 'block';
            excerpt.style.display = 'none';
            btn.textContent = 'Read Less'; // Change button text to "Read Less"
        } else {
            fullContent.style.display = 'none';
            excerpt.style.display = 'block';
            btn.textContent = 'Read More'; // Change button text back to "Read More"
        }

        document.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });

    }

    
</script>

