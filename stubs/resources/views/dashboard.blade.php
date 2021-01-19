@extends('layouts.app')

@section('content')
  <section class="uk-section">
    <div class="uk-container">
      <div class="uk-flex-center" uk-grid>
        <div class="uk-width-1-1 uk-width-3-5@s">
          <div class="uk-card uk-box-shadow-small uk-box-shadow-hover-large">
            <div class="uk-card-body">
              <h2 class="uk-card-title uk-margin-remove-bottom uk-text-lead uk-text-center">
                <a href="" class="uk-icon-button uk-button-primary" uk-icon="star"></a>
                Welcome, {{ Auth::user()->name }}!
              </h2>
              <hr>
              <p class="uk-text-meta uk-text-center uk-margin-remove-top">
                It's
                <time datetime="{{ now()->format('c') }}">
                  {{ now()->format('l, F \\t\\h\\e jS \\@ g:i a') }}!
                </time>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
