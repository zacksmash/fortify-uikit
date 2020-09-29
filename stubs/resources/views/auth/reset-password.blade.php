@extends('layouts.app')

@section('content')
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-large">
                    <x-validation-errors />

                    <div class="uk-card uk-box-shadow-small">
                        <div class="uk-card-header">
                            <h2 class="uk-text-center">{{ __('Reset Password') }}</h2>
                        </div>

                        <div class="uk-card-body uk-padding-remove-top">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="uk-margin">
                                    <label>{{ __('Email') }}</label>
                                    <input type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus />
                                </div>

                                <div class="uk-margin">
                                    <label>{{ __('Password') }}</label>
                                    <input type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="uk-margin">
                                    <label>{{ __('Confirm Password') }}</label>
                                    <input type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                <div class="uk-margin">
                                    <button class="uk-button uk-button-primary uk-width-1-1" type="submit">
                                        {{ __('Reset Password') }}
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
