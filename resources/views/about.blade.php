@extends('layouts.layout')

@section('content')
<section class="about-us">
    <div class="banner text-white" style="background: linear-gradient(to right, purple, green); padding: 50px; text-align: center;">
        <h1>Promoting gender equality and empowering communities</h1>
    </div>

    <div class="container py-5">
        <h2>History of RYFPL</h2>
        <p>RYFPL was founded to advocate for young feminists and the LBQ community in Rwanda. We believe in inclusion, equality, and social justice.</p>

        <h3>Our Core Values</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-lightblue text-white">
                    <div class="card-body">
                        <h4>Inclusion</h4>
                        <p>Ensuring everyone has a voice.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-purple text-white">
                    <div class="card-body">
                        <h4>Equality</h4>
                        <p>Advocating for gender equity in all aspects of life.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h4>Empowerment</h4>
                        <p>Equipping individuals with the skills to lead.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
