@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        Content
                    </div>
                </div>
            </div>
            <div>
                <a href="{{ url("contact_us") }}">Contact us</a>
            </div>
        </div>
    </div>
@endsection
