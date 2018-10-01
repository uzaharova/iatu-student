@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My site</div>

                    <div class="card-body">
                        <form id="demo-form" class="home__form" action="{{ url('/user_create') }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control " name="email" value="" placeholder="test@example.com" required>
                                <small id="emailHelp" class="form-text text-muted">*To email</small>
                                <div class="text-danger" id="emailError"></div>
                            </div>
                            <div  class="form-group">
                                <label>Name</label>
                                <input id="name" class="form-control " type="text" name="name" value="" required />
                            </div>
                            <div  class="form-group">
                                <label>Password</label>
                                <input id="password" class="form-control " type="password" name="password" value="" required />
                            </div>
                            <div class="button-container">
                                <button class="button" onclick="return validateForm()">
                                    <i class="fa fa-check"></i> Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
