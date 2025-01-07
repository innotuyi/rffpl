@extends('layouts.layout')

@section('content')
<section class="about-us">
    <!-- Banner Section -->
    <div class="banner text-white" style="background: linear-gradient(to right, purple, green); padding: 50px; text-align: center;">
        <h1>Promoting gender equality and empowering communities</h1>
    </div>

    <!-- Content Section -->
    <div class="container py-5">
        <!-- History Section -->
        <h2>History of RYFPL</h2>
        <p class="bg-white text-black p-4">RYFPL was founded to advocate for young feminists and the LBQ community in Rwanda. We believe in inclusion, equality, and social justice. Our mission is to support the empowerment of women and marginalized communities across Rwanda, promoting equal opportunities for all.</p>

        <!-- Core Values Section -->
        <h3>Our Core Values</h3>
        <div class="row">
            <!-- Inclusion Card -->
            <div class="col-md-4 mb-3">
                <div class="card text-white" style="background: #3b82f6; padding: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <h4>Inclusion</h4>
                        <p>Ensuring everyone has a voice.</p>
                    </div>
                </div>
            </div>
            <!-- Equality Card -->
            <div class="col-md-4 mb-3">
                <div class="card text-white" style="background: #8b5cf6; padding: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <h4>Equality</h4>
                        <p>Advocating for gender equity in all aspects of life.</p>
                    </div>
                </div>
            </div>
            <!-- Empowerment Card -->
            <div class="col-md-4 mb-3">
                <div class="card text-white" style="background: #10b981; padding: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <h4>Empowerment</h4>
                        <p>Equipping individuals with the skills to lead.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Add Images of Community Programs -->
        <h3>Our Community Programs</h3>
        <div class="row">
            <!-- Image 1: Community Program -->
            <div class="col-md-6 mb-3">
                <img src="path-to-community-program-image.jpg" alt="Community Program" class="img-fluid rounded shadow">
            </div>
            <!-- Image 2: Team Members -->
            <div class="col-md-6 mb-3">
                <img src="path-to-team-member-image.jpg" alt="Team Member" class="img-fluid rounded shadow">
            </div>
        </div> --}}
    </div>
</section>
@endsection
