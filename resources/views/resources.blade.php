@extends('layouts.layout')

@section('content')
<section class="resources">
    <!-- Header Banner -->
    <div class="banner text-white" style="background: linear-gradient(to right, #6a1b9a, #00bcd4); padding: 50px; text-align: center; border-radius: 10px;">
        <h1>Our Resources</h1>
        <p>Access our publications, reports, videos, and helpful links to empower your journey.</p>
    </div>

    <!-- Resources Section -->
    <div class="container py-5">
        <!-- Downloadable Resources -->
        <section class="downloads mb-5">
            <h2 class="text-center mb-4" style="color: #6a1b9a;">Downloadable Resources</h2>
            <div class="row">
                <!-- Resource Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-light rounded">
                        <div class="card-body">
                            <h4 class="card-title text-center" style="color: #6a1b9a;">Annual Report 2023</h4>
                            <p class="card-text">A comprehensive overview of our activities and achievements in 2023.</p>
                            <a href="#" class="btn btn-primary d-block w-100">Download PDF</a>
                        </div>
                    </div>
                </div>

                <!-- Resource Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-light rounded">
                        <div class="card-body">
                            <h4 class="card-title text-center" style="color: #6a1b9a;">Gender Equality Toolkit</h4>
                            <p class="card-text">Practical tools to promote gender equality in your community.</p>
                            <a href="#" class="btn btn-primary d-block w-100">Download Toolkit</a>
                        </div>
                    </div>
                </div>

                <!-- Resource Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-light rounded">
                        <div class="card-body">
                            <h4 class="card-title text-center" style="color: #6a1b9a;">Health Advocacy Guide</h4>
                            <p class="card-text">Steps to improve health outcomes through community action.</p>
                            <a href="#" class="btn btn-primary d-block w-100">Download Guide</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Resources -->
<section class="videos mb-5">
    <h2 class="text-center mb-4" style="color: #00bcd4;">Video Resources</h2>
    <div class="row">
        <!-- Video 1 -->
        <div class="col-md-6 mb-4">
            <div class="video-container shadow-lg rounded">
                <iframe 
                    src="https://www.youtube.com/embed/example-video-1" 
                    allowfullscreen 
                    title="Introduction to RYFPL">
                </iframe>
            </div>
            <h4 class="mt-3" style="color: #6a1b9a;">Introduction to RYFPL</h4>
            <p>A brief overview of our mission and activities.</p>
        </div>

        <!-- Video 2 -->
        <div class="col-md-6 mb-4">
            <div class="video-container shadow-lg rounded">
                <iframe 
                    src="https://www.youtube.com/embed/example-video-2" 
                    allowfullscreen 
                    title="Promoting Health Advocacy">
                </iframe>
            </div>
            <h4 class="mt-3" style="color: #6a1b9a;">Promoting Health Advocacy</h4>
            <p>Insights on how we promote health in our community.</p>
        </div>
    </div>
</section>


        <!-- Useful Links -->
        <section class="links">
            <h2 class="text-center mb-4" style="color: #00bcd4;">Useful Links</h2>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="https://www.unwomen.org" target="_blank" style="color: #6a1b9a;">UN Women - Advancing gender equality</a>
                </li>
                <li class="list-group-item">
                    <a href="https://www.who.int" target="_blank" style="color: #6a1b9a;">World Health Organization - Health advocacy resources</a>
                </li>
                <li class="list-group-item">
                    <a href="https://www.amnesty.org" target="_blank" style="color: #6a1b9a;">Amnesty International - Human rights advocacy</a>
                </li>
                <li class="list-group-item">
                    <a href="https://www.genderequality.org" target="_blank" style="color: #6a1b9a;">Gender Equality Institute - Research and insights</a>
                </li>
            </ul>
        </section>
    </div>
</section>
@endsection
