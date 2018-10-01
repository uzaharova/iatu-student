@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form id="contact-form"
                              class="contact__form"
                              action="{{ url('/send_contact_us') }}"
                              method="POST"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control " name="email" value="" placeholder="test@example.com" required>
                                <small id="emailHelp" class="form-text text-muted">*To email</small>
                                <div class="text-danger" id="emailError"></div>
                            </div>
                            <div  class="form-group">
                                <label>Description</label>
                                <textarea id="name"
                                          class="form-control"
                                          type="text"
                                          name="description" required></textarea>
                            </div>
                            <div class="button-container">
                                <button class="button">
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
