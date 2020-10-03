@props(['errors' => $errors])

@if ($errors->any())
  <div class="uk-alert-danger" uk-alert>
    <p class="uk-text-bold">{{ __('Whoops! Something went wrong.') }}</p>

    <ul class="uk-list uk-list-hyphen">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
