@extends('layouts.app')

@section('content')
    <x-status-alert />

    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-2-3">
                    <div class="uk-card uk-box-shadow-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">
                                        Welcome, {{ Auth::user()->name }}
                                    </h3>
                                    <p class="uk-text-meta uk-margin-remove-top">
                                        It's
                                        <time datetime="{{ now()->format('c') }}">
                                            {{ now()->format('l, F \\t\\h\\e jS') }}!
                                        </time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
