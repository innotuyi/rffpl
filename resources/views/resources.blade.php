@extends('layouts.layout')

@section('content')
<section class="resources">
    <!-- Header Banner -->
    <div class="banner text-white" style="background: linear-gradient(to right, purple, lightblue); padding: 50px; text-align: center;">
        <h1>Our Resources</h1>
        <p>Access our publications, reports, videos, and helpful links to empower your journey.</p>
    </div>

    <!-- Resources Section -->
    <div class="container py-5">
        <!-- Downloadable Resources -->
        <section class="downloads mb-5">
            <h2 class="text-center mb-4">Downloadable Resources</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Annual Report 2023</h4>
                            <p>A comprehensive overview of our activities and achievements in 2023.</p>
                            <a href="#" class="btn btn-primary">Download PDF</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Gender Equality Toolkit</h4>
                            <p>Practical tools to promote gender equality in your community.</p>
                            <a href="#" class="btn btn-primary">Download Toolkit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Health Advocacy Guide</h4>
                            <p>Steps to improve health outcomes through community action.</p>
                            <a href="#" class="btn btn-primary">Download Guide</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Resources -->
        <section class="videos mb-5">
            <h2 class="text-center mb-4">Video Resources</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/example-video-1" allowfullscreen></iframe>
                    </div>
                    <h4 class="mt-3">Introduction to RYFPL</h4>
                    <p>A brief overview of our mission and activities.</p>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/example-video-2" allowfullscreen></iframe>
                    </div>
                    <h4 class="mt-3">Promoting Health Advocacy</h4>
                    <p>Insights on how we promote health in our community.</p>
                </div>
            </div>
        </section>

        <!-- Useful Links -->
        <section class="links">
            <h2 class="text-center mb-4">Useful Links</h2>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="https://www.unwomen.org" target="_blank">UN Women - Advancing gender equality</a>
                </li>
                <li class="list-group-item">
                    <a href="https://www.who.int" target="_blank">World Health Organization - Health advocacy resources</a>
                </li>
                <li class="list-group-item">
                    <a href="https://www.amnesty.org" target="_blank">Amnesty International - Human rights advocacy</a>
                </li>
                <li class="list-group-item">
                    <a href="https://www.genderequality.org" target="_blank">Gender Equality Institute - Research and insights</a>
                </li>
            </ul>
        </section>
    </div>
</section>
@endsection
