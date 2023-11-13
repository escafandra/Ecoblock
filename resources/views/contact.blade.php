@extends('layouts.app')
@section('content')
    <section class="page-section" id="contact">
        <div class="container mt-5">
            <form id="contactForm" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-stretch mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="{{ trans('contact.name') }}" required />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="{{ trans('contact.email') }}" required/>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" name="phone" id="phone" type="tel" placeholder="{{ trans('contact.phone') }}" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" name="message" id="message" placeholder="{{ trans('contact.message') }}" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">{{ trans('contact.state.success') }}</div>
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">
                        {{ trans('contact.state.error') }}
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-xl text-uppercase mt-5" id="submitButton" type="submit">
                        {{ trans('buttons.send') }}
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
