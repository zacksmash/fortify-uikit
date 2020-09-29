@extends('layouts.app')

@section('content')
    <x-status-alert/>

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
                        </div>

                        <div class="uk-card-body uk-padding-remove-top">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="uk-margin">
                                    <label>{{ __('Email') }}</label>
                                    <input type="email" name="email" value="{{ old('email') }}" required autofocus />
                                </div>

                                <div class="uk-margin">
                                    <button class="uk-button uk-button-primary uk-width-1-1" type="submit">
                                        {{ __('Email Password Reset Link') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
