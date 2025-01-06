@extends('layouts.layout')

@section('content')
<section class="contact">
    <div class="banner text-white" style="background: linear-gradient(to bottom, lightblue, white); padding: 50px; text-align: center;">
        <h1>Contact Us</h1>
    </div>

    <div class="container py-5">
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" class="form-control" rows="5" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Send</button>
        </form>
    </div>
</section>
@endsection
