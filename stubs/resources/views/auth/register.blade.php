@extends('layouts.app')

@section('content')
  <section class="uk-section">
    <div class="uk-container">
      <div class="uk-flex-center" uk-grid>
        <div class="uk-width-large">
          <x-validation-errors />

          <div class="uk-card uk-box-shadow-small">
            <div class="uk-card-header">
              <h2 class="uk-text-center">{{ __('Register') }}</h2>

              <hr>
            </div>

            <div class="uk-card-body uk-padding-remove-top">
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Name') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Email') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input type="email" name="email" value="{{ old('email') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Password') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                    <input type="password" name="password" required autocomplete="new-password" />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Confirm Password') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: check"></span>
                    <input type="password" name="password_confirmation" required autocomplete="new-password" />
                  </div>
                </div>

                <div class="uk-margin">
                  <button class="uk-button uk-button-primary uk-width-1-1" type="submit">
                    {{ __('Register') }}
                  </button>
                </div>

                <div class="uk-text-center">
                  <a href="{{ route('login') }}">
                    <small>{{ __('Already registered? Sign in here.') }}</small>
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
