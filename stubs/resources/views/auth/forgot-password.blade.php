@extends('layouts.app')

@section('content')
  <section class="uk-section">
    <div class="uk-container">
      <div class="uk-flex-center" uk-grid>
        <div class="uk-width-large">
          <x-validation-errors />

          <div class="uk-card uk-box-shadow-small">
            <div class="uk-card-header">
              <h2 class="uk-text-center">{{ __('Forgot Password') }}</h2>

              <p>
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
              </p>

              <hr>
            </div>

            <div class="uk-card-body uk-padding-remove-top">
              <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Email') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus />
                  </div>
                </div>

                <div class="uk-margin">
                  <button class="uk-button uk-button-primary uk-width-1-1" type="submit">
                    {{ __('Email Password Reset Link') }}
                  </button>
                </div>

                <div class="uk-flex uk-flex-center">
                  <a href="{{ route('login') }}">
                    <small>{{ __('Back to login') }}</small>
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
