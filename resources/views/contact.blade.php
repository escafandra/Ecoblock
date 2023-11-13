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
                    <button class="btn btn-primary btn-xl text-uppercase my-5" id="submitButton" type="submit">
                        {{ trans('buttons.send') }}
                    </button>
                </div>
            </form>
            <div class="ratio ratio-21x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4488.777804928391!2d-74.01082320743795!3d4.767527992347781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8f33c22a4633%3A0xd32bd7a6391835da!2sEcological%20Block%20Systems!5e0!3m2!1ses-419!2sco!4v1699907101542!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
