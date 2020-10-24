<section>
  <div class="uk-flex-center" uk-grid>
    <div class="uk-width-1-1">
      <x-validation-errors />

      <div class="uk-card uk-box-shadow-small">
        <div class="uk-card-body">
          <div uk-grid>
            <div class="uk-width-1-1 uk-width-1-3@s uk-width-1-3@m">
              <h4>
                {{ __('Profile Information') }}
              </h4>

              <p>
                {{ __('Update your account\'s profile information and email address.') }}
              </p>
            </div>

            <div class="uk-width-1-1 uk-width-2-3@s uk-width-2-3@m">
              <x-validation-errors :errors="$errors->updateProfileInformation" />

              <form method="POST" action="{{ route('user-profile-information.update') }}" id="profile-update-info">
                @csrf
                @method('PUT')

                <div class="uk-margin uk-width-large">
                  <label class="uk-form-label">{{ __('Name') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input type="text" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" />
                  </div>
                </div>


                <div class="uk-margin uk-width-large">
                  <label class="uk-form-label">{{ __('Email') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="uk-card-footer uk-background-muted">
          <div class="uk-margin uk-text-right">
            <button type="submit" form="profile-update-info" class="uk-button uk-button-primary">
              {{ __('Save') }}
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="uk-margin-medium">
