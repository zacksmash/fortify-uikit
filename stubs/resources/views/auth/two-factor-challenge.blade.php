@extends('layouts.app')

@section('content')
  <section class="uk-section">
    <div class="uk-container">
      <div class="uk-flex-center" uk-grid>
        <div class="uk-width-large">
          <x-validation-errors />

          <div class="uk-card uk-box-shadow-small">
            <div class="uk-card-header">
              <h2 class="uk-text-center">{{ __('Two-Factor Code') }}</h2>

              <hr>
            </div>

            <div class="uk-card-body">
              <form method="POST" action="{{ url('/two-factor-challenge') }}">
                @csrf

                <div class="confirmation-method">
                  <div>
                    {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                  </div>

                  <div class="uk-margin">
                    <label class="uk-form-label">{{ __('Code') }}</label>

                    <div class="uk-inline uk-width-1-1">
                      <span class="uk-form-icon" uk-icon="icon: phone"></span>
                      <input type="text" name="code" autofocus autocomplete="one-time-code" />
                    </div>
                  </div>
                </div>

                {{-- ** OR ** --}}

                <div class="confirmation-method" hidden>
                  <div>
                    {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                  </div>

                  <div class="uk-margin">
                    <label class="uk-form-label">{{ __('Recovery Code') }}</label>

                    <div class="uk-inline uk-width-1-1">
                      <span class="uk-form-icon" uk-icon="icon: list"></span>
                      <input type="text" name="recovery_code" autocomplete="one-time-code" />
                    </div>
                  </div>
                </div>

                <div class="uk-margin">
                  <button type="submit" class="uk-button uk-button-primary uk-width-1-1">
                    {{ __('Login') }}
                  </button>
                </div>

                <div class="uk-text-center">
                  <a class="confirmation-method" uk-toggle="target: .confirmation-method">
                    <small>{{ __('Use a recovery code') }}</small>
                  </a>

                  <a class="confirmation-method" uk-toggle="target: .confirmation-method" hidden>
                    <small>{{ __('Use an authentication code') }}</small>
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
