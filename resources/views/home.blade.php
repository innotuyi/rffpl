@extends('layouts.layout')

@section('title', 'Home')

@section('content')
<div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: url('{{ asset('image/test.avif') }}') no-repeat center center/cover; height: 100vh;">
            <div class="hero-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
            <div class="container text-center text-white" style="position: relative; z-index: 2; padding-top: 200px;">
                <h1 id="auto-text" class="display-4" style="font-size: 3rem; font-weight: bold;"></h1>
                <p id="auto-subtext" class="mt-4" style="font-size: 1.25rem;"></p>
                <div class="mt-4">
                    <a href="/about" class="btn btn-success">Learn More</a>
                    <a href="/donate" class="btn btn-purple text-white">Donate Now</a>
                </div>
            </div>
        </div>
        <!-- Additional Slides -->
        <div class="carousel-item" style="background: url('{{ asset('image/community.jpg') }}') no-repeat center center/cover; height: 100vh;">
            <div class="hero-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
            <div class="container text-center text-white" style="position: relative; z-index: 2; padding-top: 200px;">
                <h1 id="auto-text-2" class="display-4" style="font-size: 3rem; font-weight: bold;"></h1>
                <p id="auto-subtext-2" class="mt-4" style="font-size: 1.25rem;"></p>
            </div>
        </div>
    </div>
    <!-- Controls (Optional) -->
    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> --}}
</div>



<div class="container py-5" data-aos="fade-left">
    <div class="row">
        <div class="col-md-4 text-center">
            <div class="p-3" style="background: purple; color: white;">
                <h3>Advocacy</h3>
                <p>Empowering communities to advocate for human rights.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="p-3" style="background: green; color: white;">
                <h3>Health Promotion</h3>
                <p>Improving access to healthcare for all communities.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="p-3" style="background: lightblue; color: white;">
                <h3>Capacity Building</h3>
                <p>Providing training and tools to empower leaders.</p>
            </div>
        </div>
    </div>
</div>

<section class=" fade-in about-us" data-aos="fade-right">
    <div class="banner text-white" style="background: linear-gradient(to right, purple, green); padding: 50px; text-align: center;">
        <h1>Promoting gender equality and empowering communities</h1>
    </div>

    <div class="container py-5" data-aos="fade-right">
        <h2>History of RYFPL</h2>
        <p class="bg-white text-black p-4">RYFPL was founded to advocate for young feminists and the LBQ community in Rwanda. We believe in inclusion, equality, and social justice. Our mission is to support the empowerment of women and marginalized communities across Rwanda, promoting equal opportunities for all.</p>

        <h3>Our Core Values</h3>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card text-white" style="background: #3b82f6; padding: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <h4>Inclusion</h4>
                        <p>Ensuring everyone has a voice.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-white" style="background: #8b5cf6; padding: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <h4>Equality</h4>
                        <p>Advocating for gender equity in all aspects of life.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-white" style="background: #10b981; padding: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <h4>Empowerment</h4>
                        <p>Equipping individuals with the skills to lead.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fade-in team" data-aos="fade-up">
    <div class="banner text-white" style="background: #6a1b9a; padding: 50px; text-align: center;">
        <h1>Meet Our Team</h1>
    </div>

    <div class="fade-in container py-5" data-aos="fade-left">
        <div class="row">
            @foreach ($team as $member)
                <div class="col-md-4">
                    <div class="card text-center" style="border-radius: 10px; box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1); border: 2px solid #6a1b9a;">
                        <div class="card-body">
                            @if($member->photo)
                                <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }} photo" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                            @else
                                <div class="rounded-circle mb-3" style="width: 100px; height: 100px; background-color: #6a1b9a; display: inline-block; line-height: 100px; color: white; font-size: 20px;">
                                    {{ strtoupper(substr($member->name, 0, 1)) }}
                                </div>
                            @endif
                            <h3 class="card-title" style="color: #6a1b9a;">{{ $member->name }}</h3>
                            <h5 class="card-subtitle mb-3" style="color: #388e3c;">{{ $member->role }}</h5>
                            <p class="card-text">{{ $member->bio }}</p>

                            @if($member->contact_link)
                                <a href="{{ $member->contact_link }}" target="_blank" class="btn btn-outline-primary mb-2">
                                    <i class="fas fa-link"></i> View Profile
                                </a>
                            @endif

                            @if($member->email)
                                <a href="mailto:{{ $member->email }}" class="btn btn-outline-success">
                                    <i class="fas fa-envelope"></i> Email
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <section class="contact fade-in">
        <div class="banner text-white" style="background: linear-gradient(to bottom, lightblue, white); padding: 60px; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h1 class="display-4" style="color: #333; font-weight: bold;">Get in Touch</h1>
            <p class="lead" style="color: #333; font-size: 1.2rem; line-height: 1.6; max-width: 800px; margin: 0 auto;">
                We’d love to hear from you! Whether you have questions, feedback, or just want to say hello, feel free to reach out.
            </p>
        </div>

        <div class="container py-5" data-aos="fade-up">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 10px; background-color: #f9f9f9;">
                        <h5 class="text-success mb-4 font-weight-bold">Contact Information</h5>
                        <p><i class="fas fa-map-marker-alt text-success"></i> Kigali, Rwanda</p>
                        <p><i class="fas fa-envelope text-success"></i> rightforyoung2019@gmail.com</p>
                        <p><i class="fas fa-phone-alt text-success"></i> +250786847371</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-wrapper p-4 border rounded shadow-sm" style="background: linear-gradient(to bottom, #e3f2fd, white);">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <h4 class="text-success font-weight-bold">Send Us a Message</h4>
                        <form action="{{ route('contact.create') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="message">Your Message</label>
                                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Type your message here" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
<!-- Add Typewriter Script -->
<script>
    function typeWriter(element, text, speed) {
        let i = 0;
        let interval = setInterval(function() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
            } else {
                clearInterval(interval);
            }
        }, speed);
    }

    window.onload = function() {
        const text = "Empowering young feminists and the LBQ community in Rwanda";
        const subtext = "Advocating for equality and inclusion";
        const textElement = document.getElementById("auto-text");
        const subtextElement = document.getElementById("auto-subtext");

        typeWriter(textElement, text, 100); // Adjust speed as needed
        typeWriter(subtextElement, subtext, 50); // Adjust speed as needed

        const text2 = "Building a future of equality and justice";
        const subtext2 = "Working together for a better tomorrow";
        const textElement2 = document.getElementById("auto-text-2");
        const subtextElement2 = document.getElementById("auto-subtext-2");

        typeWriter(textElement2, text2, 100); // Adjust speed as needed
        typeWriter(subtextElement2, subtext2, 50); // Adjust speed as needed
    };
</script>

    </section>
</section>
@endsection
