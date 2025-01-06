@extends('layouts.layout')

@section('title', 'Home')

@section('content')
<div class="hero-section text-center text-white" style="background: url('{{ asset('image/community.jpg') }}') no-repeat center center/cover; padding: 100px 20px;">
    <h1>Empowering young feminists and the LBQ community in Rwanda</h1>
    <p class="mt-4">Advocating for equality and inclusion</p>
    <div class="mt-4">
        <a href="/about" class="btn btn-success">Learn More</a>
        <a href="/donate" class="btn btn-purple text-white">Donate Now</a>
    </div>
</div>

<div class="container py-5">
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
@endsection
