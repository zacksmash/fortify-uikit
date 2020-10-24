<section class="uk-margin-top">
  <div class="uk-flex-center" uk-grid>
    <div class="uk-width-1-1">
      <x-validation-errors />

      <div class="uk-card uk-box-shadow-small">
        <div class="uk-card-body">
          <div uk-grid>
            <div class="uk-width-1-1 uk-width-1-3@s uk-width-1-3@m">
              <h4>
                {{ __('Update Password') }}
              </h4>

              <p>
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
              </p>
            </div>

            <div class="uk-width-1-1 uk-width-2-3@s uk-width-2-3@m">
              <x-validation-errors :errors="$errors->updatePassword" />

              <form method="POST" action="{{ route('user-password.update') }}" id="profile-update-password">
                @csrf
                @method('PUT')

                <div class="uk-margin uk-width-large">
                  <label class="uk-form-label">{{ __('Current Password') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: unlock"></span>
                    <input type="password" name="current_password" required autocomplete="current-password" />
                  </div>
                </div>

                <div class="uk-margin uk-width-large">
                  <label class="uk-form-label">{{ __('Password') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                    <input type="password" name="password" required autocomplete="new-password" />
                  </div>
                </div>

                <div class="uk-margin uk-width-large">
                  <label class="uk-form-label">{{ __('Confirm Password') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: check"></span>
                    <input type="password" name="password_confirmation" required autocomplete="new-password" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="uk-card-footer uk-background-muted">
          <div class="uk-margin uk-text-right">
            <button type="submit" form="profile-update-password" class="uk-button uk-button-primary">
              {{ __('Save') }}
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="uk-margin-medium">
