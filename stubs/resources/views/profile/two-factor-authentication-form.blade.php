<section class="uk-margin-top uk-margin-large-bottom">
  <div class="uk-flex-center" uk-grid>
    <div class="uk-width-1-1">
      <x-validation-errors />

      <div class="uk-card uk-box-shadow-small">
        <div class="uk-card-body">
          <div uk-grid>
            <div class="uk-width-1-1 uk-width-1-3@s uk-width-1-3@m">
              <h4>
                {{ __('Two Factor Authentication') }}
              </h4>

              <p>
                {{ __('Add additional security to your account using two factor authentication.') }}
              </p>
            </div>

            <div class="uk-width-1-1 uk-width-2-3@s uk-width-2-3@m">
              @if(! auth()->user()->two_factor_secret)
                {{-- Enable 2FA --}}
                <h5>
                  {{ __('You have not enabled two factor authentication.') }}
                </h5>
              @else
                <h5>
                  {{ __('You have enabled two factor authentication.') }}
                </h5>
              @endif

              <p>
                  {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
              </p>

              @if(! auth()->user()->two_factor_secret)
                <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                  @csrf

                  <button type="submit" class="uk-button uk-button-primary">
                    {{ __('Enable') }}
                  </button>
                </form>
              @else
                @if(session('status') == 'two-factor-authentication-enabled')
                  {{-- Show SVG QR Code, After Enabling 2FA --}}
                  <div>
                    {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
                  </div>

                  <div class="uk-margin">
                    {!! auth()->user()->twoFactorQrCodeSvg() !!}
                  </div>
                @endif

                {{-- Show 2FA Recovery Codes --}}
                <div class="hidden-recovery-codes" @unless(session('status') == 'two-factor-authentication-enabled')hidden @endunless>
                  <div>
                    {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                  </div>

                  <div class="uk-margin">
                      <pre class="uk-background-muted uk-border-rounded">@foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code){{ trim($code) }}<br>@endforeach</pre>
                  </div>
                </div>

                <div class="uk-flex uk-flex-middle uk-visible@s">
                  <div class="hidden-recovery-codes" @unless(session('status') == 'two-factor-authentication-enabled')hidden @endunless>
                    {{-- Regenerate 2FA Recovery Codes --}}
                    <form method="POST" action="{{ url('user/two-factor-recovery-codes') }}">
                      @csrf

                      <button type="submit" class="uk-button uk-button-primary">
                        {{ __('Regenerate Recovery Codes') }}
                      </button>
                    </form>
                  </div>

                  <button
                  type="submit"
                  class="uk-button uk-button-primary hidden-recovery-codes"
                  uk-toggle="target: .hidden-recovery-codes"
                  @if(session('status') == 'two-factor-authentication-enabled') hidden @endif>
                    {{ __('Show Recovery Codes') }}
                  </button>

                  <div class="uk-margin-small-left">
                    {{-- Disable 2FA --}}
                    <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="uk-button uk-button-danger">
                        {{ __('Disable') }}
                      </button>
                    </form>
                  </div>
                </div>

                <div class="uk-flex uk-flex-middle uk-flex-column uk-hidden@s">
                  <div class="hidden-recovery-codes" @unless(session('status') == 'two-factor-authentication-enabled')hidden @endunless>
                    {{-- Regenerate 2FA Recovery Codes --}}
                    <form method="POST" action="{{ url('user/two-factor-recovery-codes') }}">
                      @csrf

                      <button type="submit" class="uk-button uk-button-primary uk-width-1-1">
                        {{ __('Regenerate Recovery Codes') }}
                      </button>
                    </form>
                  </div>

                  <button
                  type="submit"
                  class="uk-button uk-button-primary hidden-recovery-codes uk-width-1-1"
                  uk-toggle="target: .hidden-recovery-codes"
                  @if(session('status') == 'two-factor-authentication-enabled') hidden @endif>
                    {{ __('Show Recovery Codes') }}
                  </button>

                  <div class="uk-margin-small-top uk-width-1-1">
                    {{-- Disable 2FA --}}
                    <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="uk-button uk-button-danger uk-width-1-1">
                        {{ __('Disable') }}
                      </button>
                    </form>
                  </div>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
