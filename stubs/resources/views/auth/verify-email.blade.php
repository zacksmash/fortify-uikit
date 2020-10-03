@extends('layouts.app')

@section('content')
  <section class="uk-section">
    <div class="uk-container">
      <div class="uk-flex-center" uk-grid>
        <div class="uk-width-large">
          <x-validation-errors />

          <div class="uk-card uk-box-shadow-small">
            <div class="uk-card-header">
              <h2 class="uk-text-center">{{ __('Verify Your Email') }}</h2>

              <p>
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
              </p>

              <hr>
            </div>

            <div class="uk-card-body uk-padding-remove-top">
              <div class="uk-margin">
                <form method="POST" action="{{ route('verification.send') }}">
                  @csrf

                  <button class="uk-button uk-button-primary uk-width-1-1" type="submit">
                    {{ __('Resend Verification Email') }}
                  </button>
                </form>
              </div>

              <div class="uk-margin">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <button class="uk-button uk-button-default uk-width-1-1" type="submit">
                    {{ __('Logout') }}
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
