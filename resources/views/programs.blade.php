@extends('layouts.layout')

@section('content')
<section class="programs">
    <div class="banner text-white" style="background: purple; padding: 50px; text-align: center;">
        <h1>Our Impactful Programs</h1>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Advocacy and Human Rights</h3>
                        <p>Ensuring everyone has equal rights and opportunities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Health Promotion</h3>
                        <p>Promoting access to healthcare for all members of the community.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Capacity Building</h3>
                        <p>Developing skills and knowledge to empower leaders.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
