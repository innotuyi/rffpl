@extends('layouts.layout')

@section('content')
<section class="blog">
    <div class="banner text-white" style="background: lightblue; padding: 50px; text-align: center;">
        <h1>Insights and Updates from RYFPL</h1>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Blog Title 1</h4>
                        <p>Excerpt from blog post.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Blog Title 2</h4>
                        <p>Excerpt from blog post.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Blog Title 3</h4>
                        <p>Excerpt from blog post.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
