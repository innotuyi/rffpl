@extends('layouts.layout')

@section('content')
<section class="donate">
    <div class="banner text-white" style="background: purple; padding: 50px; text-align: center;">
        <h1>Support Us in Building a Just and Inclusive Society</h1>
    </div>

    <div class="container py-5">
        <form action="#" method="post">
            <div class="form-group">
                <label for="amount">Enter Amount</label>
                <input type="number" id="amount" class="form-control" placeholder="Enter your donation amount">
            </div>
            <button type="submit" class="btn btn-success mt-3">Donate</button>
        </form>
    </div>
</section>
@endsection
