@extends('layouts.app')
@section('content')
    <section class="page-section" id="contact">
        <div class="container">
            <form id="contactForm" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-stretch mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="{{ trans('contact.name') }}" data-sb-validations="required" required />
                            <div class="invalid-feedback" data-sb-feedback="name:required">{{ trans('validation.required') }}</div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="{{ trans('contact.email') }}" data-sb-validations="required,email" required />
                            <div class="invalid-feedback" data-sb-feedback="email:required">{{ trans('validation.required') }}</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">{{ trans('validation.email') }}</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" name="phone" id="phone" type="tel" placeholder="{{ trans('contact.phone') }}" data-sb-validations="required,phone" required />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">{{ trans('validation.required') }}</div>
                            <div class="invalid-feedback" data-sb-feedback="phone:phone">{{ trans('validation.phone') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" name="message" id="message" placeholder="{{ trans('contact.message') }}" data-sb-validations="required" required></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">{{ trans('validation.required') }}</div>
                        </div>
                    </div>
                </div>

                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">{{ trans('contact.state.success') }}</div>
                    </div>
                </div>

                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">{{ trans('contact.state.error') }}</div></div>
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">{{ trans('buttons.send') }}</button></div>
            </form>
        </div>
    </section>
@endsection
