<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to right, purple, lightblue);">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/" style="padding: 10px;">
                <img src="{{ asset('image/logo.jpg') }}" alt="RYFPL Logo" height="50"
                    style="border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #ffffff; ;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/programs">Programs</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('blog') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/resources">Resources</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/donate">Donate</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/team">Our Team</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
